{{-- <nav class="navbar navbar-dark sticky-top bg-dark  flex-md-nowrap p-0 pb-1 pt-1">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Library Managment System</a>
    <ul class="navbar-nav px-3 flex-row d-flex align-items-center text-white">
        <h6 class="mb-0">
            <li class="nav-item text-nowrap bg-white text-dark rounded p-1">
                <i class="fas fa-user-shield"></i> {{ Auth::user()->name }}
            </li>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </h6>

    </ul>
</nav> --}}
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <li class="nav-link text-dark">Library managment system</li>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto" style="align-items: center; margin-right:2rem">
        <li class="nav-item ">
            <a class="nav-link" data-toggle="dropdown">
                <i class="fas fa-user-shield"></i>
                <span class="badge badge-danger navbar-badge" style="
                    font-size: .6rem;
                    font-weight: 300;
                    padding: 2px 4px;
                    position: absolute;
                    right: -5px;
                    font-weight:bold;
                    top: -5px;">
                    {{ Auth::user()->name }}
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="dropdown-item text-secondary" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <span id="logout" class="badge badge-warning navbar-badge" style="
             font-size: .6rem;
             font-weight: 300;
             padding: 2px 4px;
             position: absolute;
             right: 30px;
             font-weight:bold;
             color:black;
             top: 3px;">
                    Logout
                </span>
                <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
