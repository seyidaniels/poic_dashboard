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
            </br>
            </br>
              @if ($project->status == 'processing')
               <p>List of Lecturers Processing the Project</p>
                <ol>
                    @foreach ($project->reviewers() as $reviewer)
                     <li> {{$reviewer->fullname()}} </li>
                     @foreach ( $reviewer->reviewCategories($project->id) as $category)
                     <div class="badge badge-info">
                        {{$category}}
                     </div>
                     @endforeach
                    </br>
                    @endforeach
                </ol>
              @endif
            <div class="text-justify mt-4">
                {!! $project->body !!}

            </div>
          </div>
        </div> <!-- / .row -->
      </div>
    </div>

        <!-- Modal: Members -->
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
            smes: {!! json_encode($project->smes()) !!},
            sme: "",
            reviewers: {}
        }
    },
    mounted() {
        console.log(this.smes);
    },
    methods: {
        pushCategory () {
            console.log(this.reviewers);
            let data = {
                project_id: {!! json_encode($project->id) !!},
                reviewers: this.reviewers
            }
            console.log(data);
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

</script>
@endsection
