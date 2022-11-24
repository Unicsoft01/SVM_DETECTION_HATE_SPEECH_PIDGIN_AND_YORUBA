@php
$comments = App\Models\Yoruba::get();

@endphp

@extends('frontend.yield_docker')
@section('docker_doc')




<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.jqueryui.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/2.0.7/css/scroller.jqueryui.min.css">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome</h3>
                  <h6 class="font-weight-normal mb-0">SVM page for yoruba inputs </h6>
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
                  
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Recent yoruba comments</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table  id="example" class="table-striped table-hover display expandable-table nowrap" style="width:100%">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Comment</th>
                              <th>Filter</th>
                              
                              <!-- <th></th> -->
                            </tr>
                          </thead>
                          @foreach($comments as $key=> $comment)

                          <tbody>
                            <tr>
                              <td>{{$key}}</td>
                              <td>{{$comment->yoruba_word}}</td>
                              @if($comment->ishate == "Hate")
                              <td class="mt-3 btn btn-inverse-danger">{{$comment->ishate}}</td>
                              @else
                              <td class="mt-3 btn btn-inverse-info">{{$comment->ishate}}</td>
                              @endif
                              
                              <!-- <th></th> -->
                            </tr>
                          </tbody>
                          @endforeach
                      </table>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
        </div>



  
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable( {
        ajax:           "../data/2500.txt",
        deferRender:    true,
        scrollY:        200,
        scrollCollapse: true,
        scroller:       true
    } );
} );
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>     
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>     
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.jqueryui.min.js"></script>     
<script src="https://cdn.datatables.net/scroller/2.0.7/js/dataTables.scroller.min.js "></script>     
@endsection
        