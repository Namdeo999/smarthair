<div class="container clearfix">

    <div class="header-inner py-10 rpy-0 d-lg-flex align-items-center">
        <div class="logo-outer">
            <div class="logo"><a href="{{url('/home')  }}"><img src="assets/images/logos/logo.png" alt="Logo" width="167" height="54"
                        title="Logo"></a></div>
        </div>

        <div class="nav-outer clearfix mx-lg-auto">
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-lg">
                <div class="navbar-header">
                    <div class="mobile-logo my-15">
                        <a href="index.php">
                            <img src="assets/images/logos/logo.png" alt="Logo" title="Logo">
                        </a>
                    </div>

                    <!-- Toggle Button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        {{-- <li class="dropdown"><a href="index.php">Home</a>
                        </li> --}}
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li><a href="{{url('/service')}}">Services</a></li>
                        <li><a href="{{url('/gallary')}}">portfolio</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                       
                    </ul>
                </div>

            </nav>
            <!-- Main Menu End-->
        </div>

        <!-- Menu Button -->
        <div class="menu-button d-none d-lg-block">
            <a href="{{ url('/contact') }}" class="theme-btn">appointment 
                <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>
