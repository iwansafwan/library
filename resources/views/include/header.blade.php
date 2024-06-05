 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

     <div class="d-flex align-items-center justify-content-between">
         <a href="index.html" class="logo d-flex align-items-center">
             <img src="assets/img/logo.png" alt="">
             <span class="d-none d-lg-block">Rural Library</span>
         </a>
         <i class="bi bi-list toggle-sidebar-btn"></i>
     </div><!-- End Logo -->

     <nav class="header-nav ms-auto">
         <ul class="d-flex align-items-center">

             <li class="nav-item dropdown pe-3">

                 <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                     data-bs-toggle="dropdown">
                     <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                 </a><!-- End Profile Iamge Icon -->

                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                     <li class="dropdown-header">
                         <h6>{{ Auth::user()->name }}</h6>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>

                     @guest


                         <li>
                             <a class="dropdown-item d-flex align-items-center" href="{{ route('login') }}">
                                 <i class="bi bi-box-arrow-left"></i>
                                 <span>Log In</span>
                             </a>
                         </li>
                     @else
                         <li>
                             <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 <i class="bi bi-box-arrow-right"></i>
                                 <span>Log Out</span>
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                         </li>
                     @endguest
 </header><!-- End Header -->
