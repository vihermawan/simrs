<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Informasi Rumah Sakit</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/layout_1/LTR/default/full/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/layout_1/LTR/default/full/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/layout_1/LTR/default/full/assets/css/layout.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/layout_1/LTR/default/full/assets/css/components.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/layout_1/LTR/default/full/ssets/css/colors.min.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script src="{{url('/')}}/template/global_assets/js/main/jquery.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/main/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/loaders/blockui.min.js"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script src="{{url('/')}}/template/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/ui/moment/moment.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/pickers/daterangepicker.js"></script>

  <script src="{{url('/')}}/template/layout_3/LTR/default/full/assets/js/app.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/demo_pages/dashboard.js"></script>
  <!-- /theme JS files -->

    @yield('js')
</head>

<body>

  <!-- Main navbar -->
  <div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="{{URL::asset('logo.png')}}" alt="" style="width:50%; height:70%">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>
			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					
					
				</li>
				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
    <!-- /main navbar -->


  <!-- Page content -->
    <div class="page-content">

    <!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

      <!-- Sidebar mobile toggler -->
      <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
          <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
          <i class="icon-screen-full"></i>
          <i class="icon-screen-normal"></i>
        </a>
      </div>
      <!-- /sidebar mobile toggler -->


      <!-- Sidebar content -->
      <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
          <div class="card-body">
            <div class="media">
              <div class="mr-3">
                <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
              </div>

              <div class="media-body">
                <div class="media-title font-weight-semibold">Victoria Baker</div>
                <div class="font-size-xs opacity-50">
                  <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                </div>
              </div>

              <div class="ml-3 align-self-center">
                <a href="#" class="text-white"><i class="icon-cog3"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- /user menu -->
        

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
          <ul class="nav nav-sidebar" data-nav-type="accordion">
         
            <!-- Main -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
      

            {!! $html !!}

          </ul>
        </div>
        <!-- /main navigation -->

      </div>
      <!-- /sidebar content -->

      </div>
      <!-- /main sidebar -->

      <!-- Main content -->
      <div class="content-wrapper">


        <!-- content area -->
        <div id="div-content">
           cek
        </div>
        <!-- /content area -->

        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                    data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
                <span class="navbar-text">
                    &copy; 2019 <a href="#">Template Make by Komsi B 2017</a> by <a
                        href="http://themeforest.net/user/Kopyov" target="_blank">Universitas Gadjah Mada</a>
                </span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i
                                class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link"
                            target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a
                            href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                            class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i
                                    class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                </ul>
            </div>
        </div>
         <!-- /footer -->

      </div>
      <!-- /main content -->

    </div>
    <!-- /page content -->
    @yield('script')
    <script type="text/javascript">
      $(document).ready(function() {
          $.ajax({
              type : 'GET',
              url : '/dashboard',
              success : function(response){
                  $('#nav nav-sidebar').html(response.menu);
              }
          });
      });

      function changeMenu(url) {
          $.ajax({
              type : 'GET',
              url : url,
              success : function (data) {
                  $('#content-wrapper').show();
                  $('#div-content').html(data);
              }
          })
      }

      function showProfile() {
          $('#content-wrapper').hide();

          $.ajax({
              type : 'GET',
              url : '/profile',
              success : function (data) {
                  $('#content-wrapper').show();
                  $('#content-wrapper').replaceWith(data);
              }
          })
      }
    </script>

    
    

=======
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Rumah Sakit</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('template/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('template/layout_1/LTR/default/full/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('template/layout_1/LTR/default/full/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('template/layout_1/LTR/default/full/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('template/layout_1/LTR/default/full/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('template/layout_1/LTR/default/full/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{URL::asset('template/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{URL::asset('template/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('template/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{URL::asset('template/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{URL::asset('template/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{URL::asset('template/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{URL::asset('template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script src="{{URL::asset('template/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{URL::asset('template/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script src="{{URL::asset('template/global_assets/js/plugins/visualization/echarts/echarts.min.js')}}"></script>
	<script src="{{URL::asset('template/assets/js/app.js')}}"></script>
	<script src="{{URL::asset('template/global_assets/js/demo_pages/charts/echarts/lines.js')}}"></script>
    <script src="{{URL::asset('template/layout_1/LTR/default/full/assets/js/app.js')}}"></script>
    <script src="{{URL::asset('template//global_assets/js/demo_pages/dashboard.js')}}"></script>
    <script src="{{URL::asset('template/global_assets/js/demo_pages/charts/echarts/pies_donuts.js')}}"></script>
    <!-- /theme JS files -->

</head>
<body>
    @yield('wrapper')
>>>>>>> 5c8ff6de20da6cce888e23292b534e0385ddba4f
</body>
</html>
