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

        if ($validation->fails()) return response()->json(['success' => false, 'errors' => $validation->errors()], 422);

        DB::transaction(function () use ($data, $request) {

            $project = Auth::user()->team->project;

            $data['image'] = UploadImage::handle($data['image'], 'projects');

            $data['team_id'] = Auth::user()->team->id;

            if (Auth::user()->isTeamHead()) {

                $project ? $this->updateProject($data) : $this->createProject($data);

                $request['is_submitted'] == true ? $this->status = "submitted" : "";

            } else {

                if ($project == null) throw new \Exception('You cannot create a project for your team, You can only update!  contact your team head, ' . Auth::user()->team->head->fullname(), 422);

                if ($request->has('is_submitted') && $request['is_submitted'] == true) throw new \Exception("Only team head can submit project, Please contact " . Auth::user()->team->head->fullname(), 422);

                $this->updateProject($data);
            }

            Notification::send(Auth::user()->team->members, new ProjectStatus($this->status));

        }, 3);

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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|min:50|string',
            'body' => ['required', new WordCount],
            'category' => 'required|string'
        ]);
    }


}