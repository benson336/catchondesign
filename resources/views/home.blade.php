@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> 
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">June 12, 2021</div>
                                        <span class="font-weight-bold">A new user joined the account!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">June 7, 2021</div>
                                        Benson has started his third project!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">June 3, 2021</div>
                                        Josh has started his first project!
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="#"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Forlen · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="#"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Can I still change my catalog size, I
                                            also call in to request the change.</div>
                                        <div class="small text-gray-500">Juan Carison · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="#"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Hey just want to let you know I am very happy with
                                            the design sample you sent me so far! Thank you</div>
                                        <div class="small text-gray-500">Diana Darmaun · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="#"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Hi, can I request a sample from you? </div>
                                        <div class="small text-gray-500">Lindsay Falcon · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{$loginedUser->name}}</span>
                                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                
                                <a class="dropdown-item" href="./">
                                <i class="fas fa-pager fa-sm fa-fw mr-2 text-gray-400"></i>
                                Frontpage
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                                    </i>
                                        {{ __('Logout') }}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
<!-- End of Topbar -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Hi, Welcome') }} {{$loginedUser->name}}!
                </div>
            </div>
        </div>
    </div>
</div>



<input type="checkbox" id="sidebar-toggle">

<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <i class="fas fa-home"></i>
            <span style="font-size:25px;">Dashboard</span>
        <h3>
        <!--<label for="sidebar-toggle" class="ti-menu-alt"></label>-->
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="./home">
                    <span class="ti-eye"></span>
                    <span class="t1">Overview</span>
                </a>
            </li>
            <li>
                <a href="./home/users">
                    <span class="ti-face-smile"></span>
                    <span class="t1">Users</span>
                </a>
            </li>
            <li>
                <a href="./home/projects">
                    <span class="ti-agenda"></span>
                    <span class="t1">Projects</span>
                </a>
            </li>
            <li>
                <a href="./">
                    <span class="ti-folder"></span>
                    <span class="t1">Frontpage</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="main-content">
    <main>
    <h2>Overview</h2>
    <div class="dashboard-cards">
        <div class="card-single">
            <div class="card-body">
                <span class="ti-user"></span>
                <div>
                    <h5>Total Users</h5>
                    <h4>{{count($allUsers)}}</h4>
                </div>
            </div>
        </div>

        <div class="card-single">
            <div class="card-body">
                <span class="ti-briefcase"></span>
                <div>
                    <h5>Total Projects</h5>
                    <h4>{{count($allProjects)}}</h4>
                </div>
                
            </div>
        </div>

        
    </div>
    
    
    </main>
</div>

@endsection
