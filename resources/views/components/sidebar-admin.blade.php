<a href="#" class="brand-link">
    <img src="{{ !empty(Auth::user()->image) ? url('upload/images/' . Auth::user()->image) : url('upload/images/noimage.png') }} "
        alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8 height: 33px; width: 37px;">
    <span class="brand-text font-weight-light">Managment System</span>
</a>
<div class="sidebar">
    <nav class="mt-2">
        <ul id="left-sidebar" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
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
                    <i class="fas fa-id-card"></i>
                    <p>
                        Profile
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
                        <a class="nav-link" href="{{ route('edit.admin.profile') }}">
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
                                View Users
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
                        Genres (Books)
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
                    <p>Genres (Authors)
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
                        Assigned Books
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
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
                <a class="nav-link pl-3" href="{{ route('admin.view.index') }}">
                    <i class="fas fa-user-lock"></i>
                    <p>
                        Admins
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('visitor.view.index') }}">
                    <i class="fas fa-user"></i>
                    <p>
                        Readers
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('status.approved.users') }}">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <p>Approved Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('status.waiting.users') }}">
                    <i class="fa fa-spinner" aria-hidden="true"></i>
                    <p>Waiting Users
                    </p>
                </a>
            </li>
        </ul>
    </nav>
</div>
