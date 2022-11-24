@extends('frontend.yield_docker')
@section('docker_doc')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome</h3>
                  <h6 class="font-weight-normal mb-0">Everywhere good, Everything the waka well! </h6>
                </div>
                          <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today ({{Date('d, M Y')}})
                    </button>
                  <!--   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div> -->
                  </div>
                 </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Type in pidgin texts only!</h4>
 @include('frontend.flash')
                  <p class="card-description">
                    Before you reason any matter, type am here make you self comfirm the levels
                  </p>
                  <form action="{{route('pidgin.submit_docker')}}" method="post" class="form-inline">
                    @csrf
                    <label class="sr-only" for="inlineFormInputName2">Text</label>
                    <input type="text" class="form-control mb-4 mr-sm-2 col-12" name="text" id="inlineFormInputName2" placeholder="eg na mumu the the do school">
                  
                    
                    <button type="submit" class="btn btn-primary mb-2 col-12 col-md-2">Run Am</button>
                  </form>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
        </div>
@endsection
        