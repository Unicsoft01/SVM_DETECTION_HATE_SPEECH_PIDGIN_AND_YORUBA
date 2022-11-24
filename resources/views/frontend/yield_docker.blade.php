<!DOCTYPE html>
<html lang="en">
  <base href="{{url('/')}}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('/')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{url('/')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{url('/')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{url('/')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{url('/')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('/')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('/')}}/images/favicon.png" />
  <style type="text/css">
    .content-wrapper{
      background-color: #D8E1EA;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        @if(route('pidgin')==url()->current())
        <a class="navbar-brand brand-logo mr-5" href="{{url('/')}}"><span class="mr-2">SVM  - Pidgen</span></a>
        @else
        <a class="navbar-brand brand-logo mr-5" href="{{url('/')}}"><span class="mr-2">SVM  - Yoruba</span></a>
        @endif
        <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><span>SVM</span></a>

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Home Page</span>
            </a>
          </li>
          @if(route('yoruba')==url()->current())
          <li class="nav-item">
            <a class="nav-link" href="{{route('pidgin')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Switch to Pidgin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('recent_hate')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">recent Hate speeches</span>
            </a>
          </li>
          @else()
          <li class="nav-item">
            <a class="nav-link" href="{{route('yoruba')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Switch to Yoruba</span>
            </a>
          </li>
          @endif


        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
@yield('docker_doc')
<!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.  Development of Pidgin English Text based Hate detecton model. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i> <b> by Mrs. Folake Adegoke</b> </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{url('/')}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{url('/')}}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{url('/')}}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{url('/')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="{{url('/')}}/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('/')}}/js/off-canvas.js"></script>
  <script src="{{url('/')}}/js/hoverable-collapse.js"></script>
  <script src="{{url('/')}}/js/template.js"></script>
  <script src="{{url('/')}}/js/settings.js"></script>
  <script src="{{url('/')}}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('/')}}/js/dashboard.js"></script>
  <script src="{{url('/')}}/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>



