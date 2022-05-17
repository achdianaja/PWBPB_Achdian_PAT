<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Inventaris</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon"/>
    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <!-- simplebar CSS-->
    <link href="{{ asset('plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ asset('css/sidebar-menu.css') }}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{ asset('css/app-style.css') }}" rel="stylesheet"/>
    <!-- Data Table -->
    <link href="{{ asset('plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    
  </head>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

	
  <!-- simplebar js -->
  <script src="{{ asset('plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- waves effect js -->
  <script src="{{ asset('js/waves.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('js/sidebar-menu.js') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('js/app-script.js') }}"></script>
  <!-- Data table -->
  <script src="{{ asset('plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>
  
  {{-- <!-- Vector map JavaScript -->
  <script src="{{ asset('plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
  <script src="{{ asset('plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <!-- Chart js -->
  <script src="{{ asset('plugins/Chart.js/Chart.min.js') }}"></script> --}}
  <!-- Index js -->
  {{-- <script src="{{ asset('js/index.js') }}"></script> --}}
  {{-- <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuhMN1ZjFqExVF6J4IeKcHe28LBc9tlZ79%2bcZqzQCTG5WL9PSAm%2f6SZpP3c9agMh70ri%2bRSs256Oap6Ocuf%2bH6v928DUzv%2bTUoKQtvZGAiX9m9zx7uO9gCxU2SkN5K1zT7CDqhKeIhh5lDzNUtHkQirH0%2fmvBWhDwBPuqW8M%2bz26DrnlmvHc9Rs7ShjyzIaOpjIN91mmqgilrdf0S7FNJ5pc1gmn3a%2bIluNPHb4BB1LVNT5CRapXDKNVJriKePAS0JSaGYX4fc2LP6NyYoEN1%2bCKN423OJySlR3jpXWdXLvTndj4bhvz%2fkVOYq%2f36zp97izjiT4m5el0NmUTvvV3AN0Nck7BCXdY9hBAUlkRYE8aox8HyTIygIwU4wqHjLijitqIDlJQIlM%2fkd4dOtoOHrHEHPJBtmTieG%2f1aRgbcH46hvzS%2fv%2bwcng7SLlyzzlnM%2bfvsWCdduBOMiwR2TKEaLi5zuMCkbIHSzM8m%2b9HF2%2bT8g%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body> --}}

   <body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="/index">
       <img src="{{ asset('images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text text-warning"><strong>Inventaris</strong></h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      
      <li>
        <a href="/input" class="waves-effect">
          <i class="fa fa-pencil-square-o"></i><span>Tambah barang</span>
        </a>
      </li>

      <li>
        <a href="/data" class="waves-effect">
          <i class="icon-calendar"></i> <span>Data Barang</span>
        </a>
      </li>

      {{-- <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-home"></i> <span>Gudang</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
           @foreach ($kondisi as $item)
            <li><a href="/kelompok/{{ $item->id }}"><i class="fa-regular fa-circle"></i>{{ $item->kondisi }}</a></li>
          @endforeach
        </ul>
      </li> --}}
	  
      
    </ul>
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-scooter">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="{{ asset('images/avatars/avata') }}r-17.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('images/avatars/avata') }}r-17.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Katrina Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
  
</nav>
</header>
@yield('head')