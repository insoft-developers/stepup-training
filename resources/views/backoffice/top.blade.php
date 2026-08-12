 <div class="navbar-custom">
     <div class="topbar">
         <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

             <!-- Brand Logo -->
             <div class="logo-box">
                 <!-- Brand Logo Light -->
                 <a href="{{ url('backoffice') }}" class="logo-light">
                     <img src="{{ asset('template/admin') }}/assets/images/logo-light.png" alt="logo" class="logo-lg"
                         height="20">
                     <img src="{{ asset('template/admin') }}/assets/images/logo-sm.png" alt="small logo" class="logo-sm"
                         height="20">
                 </a>

                 <!-- Brand Logo Dark -->
                 <a href="{{ url('backoffice') }}" class="logo-dark">
                     <img src="{{ asset('template/admin') }}/assets/images/logo-dark.png" alt="dark logo"
                         class="logo-lg" height="20">
                     <img src="{{ asset('template/admin') }}/assets/images/logo-sm.png" alt="small logo" class="logo-sm"
                         height="20">
                 </a>
             </div>

             <!-- Sidebar Menu Toggle Button -->
             <button class="button-toggle-menu waves-effect waves-dark rounded-circle">
                 <i class="mdi mdi-menu"></i>
             </button>
         </div>

         <ul class="topbar-menu d-flex align-items-center gap-2">




             <li class="dropdown">
                 <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-dark" data-bs-toggle="dropdown"
                     href="#" role="button" aria-haspopup="false" aria-expanded="false">
                     <img src="{{ asset('template/admin') }}/assets/images/users/avatar-1.jpg" alt="user-image"
                         class="rounded-circle">
                     <span class="ms-1 d-none d-md-inline-block">
                         Henry <i class="mdi mdi-chevron-down"></i>
                     </span>
                 </a>

                 <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                     <!-- item-->
                     <div class="dropdown-header noti-title">
                         <h6 class="text-overflow m-0">Welcome !</h6>
                     </div>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i data-lucide="user" class="font-size-16 me-2"></i>
                         <span>My Account</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i data-lucide="settings" class="font-size-16 me-2"></i>
                         <span>Settings</span>
                     </a>

                     <!-- item-->
                     <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                         <i data-lucide="lock" class="font-size-16 me-2"></i>
                         <span>Lock Screen</span>
                     </a>

                     <div class="dropdown-divider"></div>


                     <form method="POST" action="{{ route('backoffice.logout') }}">
                         @csrf



                         <a href="{{ route('backoffice.logout') }}" class="dropdown-item notify-item">
                             <i data-lucide="log-out" class="font-size-16 me-2"></i>
                             <span
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">Logout</span>
                         </a>
                     </form>

                 </div>
             </li>

         </ul>
     </div>
 </div>
