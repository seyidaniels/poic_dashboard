<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\WordCount;
use Validator;
use Auth;
use App\Project;
use App\Helpers\UploadImage;
use DB;
use App\Notifications\ProjectStatus;
use Notification;


class ProjectController extends Controller
{
    private $message;
    private $status;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            if (Auth::user()->team == null) throw new \Exception("You have not created a team yet!", 422);
            return $next($request);
        });
    }

    public function processProject(Request $request)
    {
        $data = $request->all();

        $validation = $this->validator($request->all());

        if ($validation->fails()) return response()->json(['success' => false, 'error' => $validation->errors()], 422);

        DB::beginTransaction();

        $project = Auth::user()->team->project;

        if ($project !== null) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => "You have submitted a project already and can no longer edit or create a new one"], 422);
        }

        $data['image'] = UploadImage::handle($data['image'], 'projects');

        $data['team_id'] = Auth::user()->team->id;

        if (Auth::user()->isTeamHead()) {

            $project ? $this->updateProject($data) : $this->createProject($data);

            $request['is_submitted'] == true ? $this->status = "submitted" : "";
        } else {

            if ($project == null) {
                DB::rollBack();
                return response()->json(['success' => false, 'message' => 'You cannot create a project for your team, You can only update!  contact your team head, ' . Auth::user()->team->head->fullname()], 422);
            }

            if ($request->has('is_submitted') && $request['is_submitted'] == true) {
                DB::rollBack();
                return response()->json(['success' => false, 'message' => "Only team head can submit project, Please contact " . Auth::user()->team->head->fullname()], 422);
            }

            $this->updateProject($data);
        }
        $data['status'] = $this->status;

        DB::commit();

        Notification::send(Auth::user()->team->members, new ProjectStatus($data));

        return response()->json(['success' => true, 'message' => $this->message]);
    }

    public function createProject($data)
    {
        $data['team_id'] = Auth::user()->team->id;
        Project::create($data);
        $this->message = "Team created successfully";
        $this->status = "created";
    }

    public function updateProject($data)
    {
        Auth::user()->team->project->update($data);
        $this->message = "Team Updated successfully";
        $this->status = "updated";
    }

    public function getProject()
    {
        $project = Auth::user()->team->project;
        if ($project !== null) {
            return response()->json(['project' => $project, 'success' => true]);
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|string',
            'body' => ['required', new WordCount],
            'category' => 'required|string'
        ]);
    }
}