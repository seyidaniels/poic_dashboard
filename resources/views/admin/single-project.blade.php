@extends('layouts.admin')


@section('content')

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
      <div class="container-fluid">
        <div class="my-4"></div>
        <div class="row justify-content-center mt-4">
          <div class="col-12 col-xl-8">

              <div class="badge badge-info">Topic:</div> {{$project->title}}
              <br>
               <br>
               <div class="badge badge-danger">Category</div> {{$project->category}}
               <br>
                <br>
             <div class="badge badge-info">status</div> {{$project->status}}

              @if($project->status == 'pending')
              <button class="float-right btn btn-primary" data-toggle="modal" data-target="#modalMembers" >Assign</button>
              @endif
              @if ($project->status == 'processing' &&  !Auth::user()->is_super() && !$project->scoredByAuthenticatedUser() )
                <button class="float-right btn btn-primary" data-toggle="modal" data-target="#vetCategories" >Vet Categories</button>
              @endif

              @if ($project->status == 'modification' &&  !Auth::user()->is_super() && !$project->scoredByAuthenticatedUser() )
                <button class="float-right btn btn-primary" data-toggle="modal" data-target="#vetCategories" >Judge Categories</button>
              @endif

              @if ($project->scoredByAuthenticateduser())
                  <p class="text-right">You have already Vetted for this Project</p>
              @endif
            </br>
            </br>
              @if ($project->status == 'processing' && Auth::user()->is_super())
                @if (count($project->reviewers() ))
               <p>List of Lecturers Processing the Project</p>
                <ol>
                    @foreach ($project->reviewers() as $reviewer)
                     <li> {{$reviewer->fullname()}} | {{$reviewer->role->role}} </li>
                     @foreach ( $reviewer->reviewCategories($project->id) as $category)
                     <div class="badge badge-info">
                        {{$category}}
                     </div>
                     @endforeach
                    </br>
                    @endforeach
                </ol>
                @else

                <p>No Lecturer has been assigned to his project yet </p>

                @endif
              @endif

            <div class="text-justify mt-4">
                {!! $project->body !!}

            </div>
          </div>
        </div> <!-- / .row -->
      </div>
    </div>

        <!-- Modal: Members -->

        @if(Auth::user()->is_super())
            <div class="modal  fade" id="modalMembers" role="dialog" aria-hidden="true" style="overflow:hidden;">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Asssign this Project to Reviewers
                  </h4>

                </div>
                <div class="col-auto">


                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                </div>
              </div> <!-- / .row -->
            </div>
            <div class="card-header">

              <!-- Form -->
              <form @submit.prevent="pushCategory" >

                <div class="form-group" v-for="category in vettingCategories" >
                <label for="category">  <div class="badge badge-info"> @{{category}} </div> </label>
                    <select class="form-control" v-model="reviewers[category]" multiple>
                        @foreach($project->smes() as $sme)
                        <option  value="{{$sme->id}}" > {{$sme->title}} {{$sme->firstname }} {{$sme->lastname}} |  {{$sme->role->role}}   </option>
                        @endforeach
                    </select>




                    {{-- <input type="text"  class="form-control"> --}}

                </div>

                <button class="btn btn-primary float-center" type="submit">Confirm</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    @else
           <div class="modal  fade" id="vetCategories" role="dialog" aria-hidden="true" style="overflow:hidden;">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                   Your Verdict to this Project
                  </h4>

                </div>
                <div class="col-auto">


                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                </div>
              </div> <!-- / .row -->
            </div>
            <div class="card-header">
              <!-- Form -->
              <form @submit.prevent="confirm" >
                <div class="form-group" v-for="category in categories" >
                <label for="category"> You are  @if (Auth::user()->role->role == 'reviewer' ) vetting @else judging @endif based on  <div class="badge badge-info">  @{{category}}  </div> of this project </label>
                    <select class="form-control" v-model="score[category]" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <button class="btn btn-primary float-center" type="submit">Confirm</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
        @endif




@endsection

@section('extra-js')


<script>



new Vue ({
    el: '#modalMembers',
    data: function () {
        return {
            vettingCategories: [
                'originality',
                'relevance',
                'feasibility',
                'viability',
                'Cost'
            ],
            selectedCategories: [],
            category: '',
            reviewers: {},        }
    },
    methods: {
        pushCategory () {
            let data = {
                project_id: {!! json_encode($project->id) !!},
                reviewers: this.reviewers
            }
           axios.post('/admin/dashboard/add-reviewers', data).then (response => {
                if (response.data.error) {
                    let errors = Object.values(response.data.error);
                            errors.forEach(element => {
                               toastr.error(element);
                            });
                }
                if (response.data.success) {
                    toastr.success (response.data.message);
                    setTimeout(() => {
                        location.reload();
                    })
                }
            }).catch(error => {
                console.log(error);
            })
        }

    }
})

new Vue ({
    el: "#vetCategories",
    data: function () {
        return {
            categories: {!! json_encode(Auth::user()->reviewCategories($project->id)) !!},
            score: {}
        }
    },
    mounted() {
        console.log(this.categories);
    },
    methods: {
        confirm () {
            if (confirm("Are you sure you want to confirm the inputted score (s)")) {
            let data = {
                project_id: {!! json_encode($project->id) !!},
                score: this.score
            }
            axios.post('/admin/dashboard/score-project', data).then (response => {
                if (response.data.success) {
                    toastr.success (response.data.message);
                    location.href = "/admin/dashboard/projects";
                }
            })

            }
        }
    }
})

</script>
@endsection
