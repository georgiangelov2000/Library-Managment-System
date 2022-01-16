<aside class="main-sidebar sidebar-dark-primary elevation-4">
    @if (Auth::user()->role_id == '2')

        <a href="#" class="brand-link d-flex align-items-center justify-content-center">
            <span class="brand-text font-weight-light">Managment System</span>
            <br>
        </a>
        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
            <div class="image col-md-2 p-0 ml-4">
                <img src="{{ !empty(Auth::user()->image) ? url('upload/images/' . Auth::user()->image) : url('upload/images/noimage.png') }}  "
                    class="img-circle elevation-2 w-100" alt="{{ Auth::user()->name }}">
            </div>
            <div class="info d-flex align-items-center">
                <a href="#" class="d-block"
                    style="color:#c2c7d0; text-decoration:none; font-size:1rem">{{ Auth::user()->name }}</a>
                @if (Cache::has('user-is-online-' . Auth::user()->id))
                    <span href="#" class="d-flex align-items-center"
                        style="margin-top:0.05rem;  font-size:.7rem; color:#c2c7d0;"><i
                            class=" ml-4 mr-1 fa fa-circle text-success" style="font-size:.7rem;"></i> Online</a>
                    @else
                        <span href="#" class="d-flex align-items-center"
                            style="margin-top:0.05rem;  font-size:.7rem; color:#c2c7d0;"><i
                                class=" ml-4 mr-1 fa fa-circle text-danger" style="font-size:.7rem;"></i> Offline</a>
                @endif
            </div>
        </div>
        <div class="sidebar">
            <nav class="mt-2">
                <ul id="left-sidebar" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ route('dashboard.index') }}" class="nav-link active">
                            <i class="fas fa-chart-line"></i>
                            <p>
                                Dashboard <span class="badge badge-dark text-dark"></span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('dashboard.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Home
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-id-card"></i>
                            <p>
                                Profile <span class="badge badge-dark text-dark"></span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('admin.profile') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        My profile
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('edit.profile', Auth::id()) }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Edit profile
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users-cog"></i>
                            <p>
                                Users <span style="margin-left:33.5%"
                                    class="badge badge-warning text-dark">{{ count($usersCount) }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('user.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Create user
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('user.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        View Users
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-user-tag"></i>
                            <p>
                                Users Roles <span style="margin-left:16%"
                                    class="badge badge-warning text-dark">{{ count($usersRolesCount) }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('admin.view.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Admins
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('visitor.view.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Visitors
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-user-edit"></i>
                            <p>
                                Authors <span style="margin-left:27%"
                                    class="badge badge-warning text-dark">{{ count($authorsCount) }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('author.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Create Author
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('author.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        View Authors
                                    </p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-book"></i>
                            <p>
                                Books <span style="margin-left:35%"
                                    class="badge badge-warning text-dark">{{ count($booksCount) }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('book.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Create Book
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('book.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        View Books
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-star"></i>
                            <p>
                                Roles <span style="margin-left:35%"
                                    class="badge badge-warning text-dark">{{ count($rolesCount) }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('role.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Create Role
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('role.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        View Roles
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-transgender" aria-hidden="true"></i>
                            <p>
                                Genders <span style="margin-left:30%"
                                    class="badge badge-warning text-dark">{{ count($gendersCount) }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('gender.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Create Gender
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('gender.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        View Genders
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fab fa-hubspot"></i>
                            <p>
                                Genres (Books) <span style="margin-left:9%"
                                    class="badge badge-warning text-dark">{{ count($genresBooks) }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('gendre.book.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Create Genre
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('gendre.book.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        View Genres
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fab fa-hubspot"></i>
                            <p>Genres (Authors) <span style="margin-left:4%" class="badge badge-warning text-dark">
                                    {{ count($genresAuthors) }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('gendre.author.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        View Genres
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('gendre.author.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Create Genre
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-tasks"></i>
                            <p>
                                Assigned Books <span style="margin-left:7%"
                                    class="badge badge-warning text-dark">{{ count($assigned_booksCount) }}</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('assign.book.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        View Assigned Books
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('assign.book.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Assign Books
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('assign.book.index') }}">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p>
                                Approved Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('assign.book.create') }}">
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                            <p>
                                Waiting Users
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    @elseif (Auth::user()->role_id == '1')

        <a href="#" class="brand-link d-flex align-items-center justify-content-center">
            <span class="brand-text font-weight-light">Managment System</span>
            <br>
        </a>
        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
            <div class="image col-md-2 p-0 ml-4">
                <img src="{{ !empty(Auth::user()->image) ? url('upload/images/' . Auth::user()->image) : url('upload/images/noimage.png') }}  "
                    class="img-circle elevation-2 w-100" alt="{{ Auth::user()->name }}">
            </div>
            <div class="info d-flex align-items-center">
                <a href="#" class="d-block"
                    style="color:#c2c7d0; text-decoration:none; font-size:1rem">{{ Auth::user()->name }}</a>
                @if (Cache::has('user-is-online-' . Auth::user()->id))
                    <a href="#" class="d-flex align-items-center"
                        style="margin-top:0.05rem; text-decoration:none; font-size:.7rem; color:#c2c7d0;"><i
                            class=" ml-4 mr-1 fa fa-circle text-success" style="font-size:.7rem;"></i> Online</a>
                @else
                    <a href="#" class="d-flex align-items-center"
                        style="margin-top:0.05rem; text-decoration:none; font-size:.7rem; color:#c2c7d0;"><i
                            class=" ml-4 mr-1 fa fa-circle text-danger" style="font-size:.7rem;"></i> Offline</a>
                @endif
            </div>
        </div>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-chart-line"></i>
                            <p>
                                Dashboard <span class="badge badge-dark text-dark"></span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('visitor.view.dashboard') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Home
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-id-card"></i>
                            <p>
                                Profile <span class="badge badge-dark text-dark"></span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('profile.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        My Profile
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('edit.profile', Auth::id()) }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Edit Profile
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-book"></i>
                            <p>
                                Books <span class="badge badge-dark text-dark"></span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('visitors.books') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        My books
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('favourites.page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Favourite Books
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('incomings.page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Incoming Books
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('readed.page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Readed Books
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('archived.page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Archived Books
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-comments"></i>
                            <p>
                                Comments <span class="badge badge-dark text-dark"></span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('comment.create') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Create Comment
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
            </nav>
        </div>
    @endif

    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/sidebar.js') }}"></script>
    @endpush
</aside>
