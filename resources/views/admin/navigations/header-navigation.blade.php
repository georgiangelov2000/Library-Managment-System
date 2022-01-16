<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item clicking">
            <a id="toggleBtn" class="nav-link clicking" data-widget="pushmenu" href="#"><i class="clicking fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <li class="nav-link text-dark">Library managment system</li>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto" style="align-items: center; margin-right:1rem">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fas fa-th-large"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" style="left: inherit; right: 0px;" id="header-dropdown">
                <p class="dropdown-item dropdown-header text-sm d-flex justify-content-evenly align-items-center">
                    <i style="color:#000" class="fas fa-user mr-1"></i><span style="color:#000;">Name:</span>
                    <span class="text-muted text-sm">
                        {{ Auth::user()->name }}
                    </span>
                </p>
                <div class="dropdown-divider"></div>
                <p href="#" class="dropdown-item d-flex justify-content-evenly align-items-center">
                    <i class="fas fa-user-tag mr-1"></i><span class="text-dark">Role:</span>
                    <span class="text-muted text-sm">
                        @if (Auth::user()->role_id == '2')
                            ADMIN
                        @else
                            VISITOR
                        @endif
                    </span>
                </p>
                <div class="dropdown-divider"></div>
                <p href="#" class="dropdown-item d-flex justify-content-evenly align-items-center">
                    <span class="text-dark mr-2">Status: </span>
                    @if (Cache::has('user-is-online-' . Auth::user()->id))
                        <a href="#" class="d-flex align-items-center"
                            style="margin-top:0.05rem; text-decoration:none; font-size:.7rem; color:#c2c7d0;"><i
                                class=" mr-1 fa fa-circle text-success" style="font-size:.7rem;"></i> Online</a>
                    @else
                        <a href="#" class="d-flex align-items-center"
                            style="margin-top:0.05rem; text-decoration:none; font-size:.7rem; color:#c2c7d0;"><i
                                class=" mr-1 fa fa-circle text-danger" style="font-size:.7rem;"></i> Offline</a>
                    @endif
                </p>
                <div class="dropdown-divider"></div>
                <p href="#" class="dropdown-item d-flex justify-content-evenly align-items-center pb-0 pt-0">
                    <a class="nav-link text-danger d-flex justify-content-start align-items-center col-md-12"
                        href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <span id="logout">
                            Logout
                        </span>
                        <i class="fa fa-sign-out text-danger ml-1" aria-hidden="true"></i>
                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </p>
            </div>
        </li>
    </ul>

    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/sidebar.js') }}"> </script>
    @endpush
</nav>
