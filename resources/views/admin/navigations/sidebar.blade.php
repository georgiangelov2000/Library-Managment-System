<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('home')}}" class="brand-link">
        <img src="/assets/bookshelf.png" alt="AdminPANEL Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminPANEL</span>
    <br>
    </a>
    @if (Auth::user()->role_id == '2')
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('dashboard.index') }}" class="nav-link active">
                            <i class="fas fa-chart-line"></i>
                            <p>
                                Dashboard
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
                            <i class="fas fa-users-cog"></i>

                            <p>
                                Users
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
                                        Users
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fas fa-user-tag"></i>
                            <p>
                                Users Roles
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
                                Authors
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
                                Books
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
                                Roles
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
                                Genders
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
                                Genres (Book)
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
                                        View Genre
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fab fa-hubspot"></i>
                            <p>
                                Genres (Authors)
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
                            <i class="fa fa-transgender" aria-hidden="true"></i>
                            <p>
                                Assign Users to book
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('assign.user.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Assign User to book
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>>
            </nav>
        </div>
    @elseif (Auth::user()->role_id == '1')
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('visitors.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Home
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('profile.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Profile
                                    </p>
                                </a>
                                <a class="nav-link" href="{{ route('visitors.books') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        My books
                                    </p>
                                </a>
                                {{-- <a class="nav-link" href="{{ route('user.index') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        My favourite books
                                    </p>
                                </a> --}}
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    @endif
    <!-- /.sidebar -->
</aside>
