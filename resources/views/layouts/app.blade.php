<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <meta name="keywords" content="Learn Quran, Koran, Arabic, learn quran online, learn quran app, learn quran english, quran pronunciation, correct pronunciation of korean, koran online, learn quran online, quran, koran" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ if (window.scrollY == 0) window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script> 
    <!--icons-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--//skycons-icons-->
</head>
<body>
    <div id="app">
        <div class="page-container">    
         <div class="left-content">
             <div class="mother-grid-inner">
                <!--header start here-->
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo-name">
                           <a href="index.html"> <h1>Shoppy</h1> 
                            <!--<img id="logo" src="" alt="Logo"/>--> 
                        </a>                              
                    </div>
                    <!--search-box-->
                    <div class="search-box">
                        <form>
                            <input type="text" placeholder="Search..." required=""> 
                            <input type="submit" value="">                  
                        </form>
                    </div><!--//end-search-box-->
                    <div class="clearfix"> </div>
                </div>
                <div class="header-right">
                    <div class="profile_details_left"><!--notifications of menu start -->
                        <ul class="nofitications-dropdown">
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new messages</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                     <div class="user_img"><img src="images/p4.png" alt=""></div>
                                     <div class="notification_desc">
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div> 
                                </a></li>
                                <li class="odd"><a href="#">
                                    <div class="user_img"><img src="images/p2.png" alt=""></div>
                                    <div class="notification_desc">
                                        <p>Lorem ipsum dolor </p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>  
                                </a></li>
                                <li><a href="#">
                                 <div class="user_img"><img src="images/p3.png" alt=""></div>
                                 <div class="notification_desc">
                                    <p>Lorem ipsum dolor</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div> 
                            </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all messages</a>
                                </div> 
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 3 new notification</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                <div class="user_img"><img src="images/p5.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>  
                            </a></li>
                            <li class="odd"><a href="#">
                                <div class="user_img"><img src="images/p6.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div> 
                            </a></li>
                            <li><a href="#">
                                <div class="user_img"><img src="images/p7.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div> 
                            </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all notifications</a>
                                </div> 
                            </li>
                        </ul>
                    </li>   
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 8 pending task</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                <div class="task-info">
                                    <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                    <div class="clearfix"></div>    
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="bar yellow" style="width:40%;"></div>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <div class="task-info">
                                    <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                    <div class="clearfix"></div> 
                                </div>
                                <div class="progress progress-striped active">
                                   <div class="bar green" style="width:90%;"></div>
                               </div>
                           </a></li>
                           <li><a href="#">
                            <div class="task-info">
                                <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                <div class="clearfix"></div>    
                            </div>
                            <div class="progress progress-striped active">
                               <div class="bar red" style="width: 33%;"></div>
                           </div>
                       </a></li>
                       <li><a href="#">
                        <div class="task-info">
                            <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                            <div class="clearfix"></div> 
                        </div>
                        <div class="progress progress-striped active">
                           <div class="bar  blue" style="width: 80%;"></div>
                       </div>
                   </a></li>
                   <li>
                    <div class="notification_bottom">
                        <a href="#">See all pending tasks</a>
                    </div> 
                </li>
            </ul>
        </li>   
    </ul>
    <div class="clearfix"> </div>
</div>
<!--notification menu end -->
<div class="profile_details">       
    <ul>
        <li class="dropdown profile_details_drop">
            @auth
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img">   
                    <span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
                    <div class="user-name">
                        <p>{{ Auth::user()->name }}</p>
                        <span>Administrator</span>
                    </div>
                    <i class="fa fa-angle-down lnr"></i>
                    <i class="fa fa-angle-up lnr"></i>
                    <div class="clearfix"></div>    
                </div>  
            </a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
            <ul class="dropdown-menu drp-mnu">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
                <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endguest
        </ul>
    </li>
</ul>
</div>
<div class="clearfix"> </div>               
</div>
<div class="clearfix"> </div>  
</div>
</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function() {
       var navoffeset=$(".header-main").offset().top;
       $(window).scroll(function(){
        var scrollpos=$(window).scrollTop(); 
        if(scrollpos >=navoffeset){
            $(".header-main").addClass("fixed");
        }else{
            $(".header-main").removeClass("fixed");
        }
    });

   });
</script>
<!-- /script-for sticky-nav -->
{{-- Inner Box start --}}
<main class="py-4">
    @yield('content')
</main>
{{-- Inner Box End --}}
<!--copy rights start here-->
<br>
<div class="copyrights">
    <p>© 2020 AppBuzz. All Rights Reserved | Design by  <a href="http://appbuzz.com/" target="_blank">AppBuzz</a> </p>
</div>  
<!--COPY rights end here-->
</div>

<!--slider menu-->
<div class="sidebar-menu">
    <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
      <!--<img id="logo" src="" alt="Logo"/>--> 
  </a> </div>         
  <div class="menu">
      <ul id="menu" >
        <li id="menu-home" ><a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-cogs"></i><span>Makharij مخارج</span><span class="fa fa-angle-right" style="float: right"></span></a>
          <ul>
            <li><a href="{{ url('/admin/makharij/create') }}">Add Makharij</a></li>
            <li><a href="{{ url('/admin/makharij') }}">Makharij</a></li>                    
        </ul>
    </li>
    <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Alphabet حُرُوف</span><span class="fa fa-angle-right" style="float: right"></span></a>
      <ul id="menu-comunicacao-sub" >
        <li id="menu-mensagens" style="width: 120px" ><a href="{{ url('/admin/alphabet/create') }}">Add Alphabet</a>                      
        </li>
        <li id="menu-arquivos" ><a href="{{ url('/admin/alphabet') }}">Alphabets</a></li>
    </ul>
</li>

<li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Vowels تشكيل  <span><span class="fa fa-angle-right" style="float: right"></span></a>
      <ul id="menu-comunicacao-sub" >
        <li id="menu-mensagens" style="width: 120px" ><a href="{{ url('/admin/vowel/create') }}">Add Vowels</a>                      
        </li>
        <li id="menu-arquivos" ><a href="{{ url('/admin/vowel') }}">Vowels</a></li>
    </ul>
</li>

<li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Letter Formation<span><span class="fa fa-angle-right" style="float: right"></span></a>
      <ul id="menu-comunicacao-sub" >
        <li id="menu-mensagens" style="width: 120px" ><a href="{{ url('/admin/letter_formation/create') }}">Add Letter Formation</a></li>
        <li id="menu-arquivos" ><a href="{{ url('/admin/letter_formation') }}">Letter Formation</a></li>
    </ul>
</li>

<li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
<li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
  <ul id="menu-academico-sub" >
   <li id="menu-academico-boletim" ><a href="login.html">Login</a></li>
   <li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>                 
</ul>
</li>

<li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>
<li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span><span class="fa fa-angle-right" style="float: right"></span></a>
   <ul id="menu-academico-sub" >
    <li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>
    <li id="menu-academico-boletim" ><a href="inbox-details.html">Compose email</a></li>
</ul>
</li>
<li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>
   <ul id="menu-academico-sub" >
    <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>
    <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>
</ul>
</li>
<li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>
    <ul id="menu-academico-sub" >
        <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>
        <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>
    </ul>
</li>
</ul>
</div>
</div>
<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {                
      if (toggle)
      {
        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
        $("#menu span").css({"position":"absolute"});
    }
    else
    {
        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
        setTimeout(function() {
          $("#menu span").css({"position":"relative"});
      }, 400);
    }               
    toggle = !toggle;
});
</script>
<!--scrolling js-->
<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<!--//scrolling js-->
<script src="{{ asset('js/bootstrap.js') }}"> </script>
<!-- mother grid end here-->


</div>
</body>
</html>
