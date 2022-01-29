<aside class="main-sidebar sidebar-dark-primary elevation-4">
    @if (Auth::user()->role_id == '2')
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
                                <a class="nav-link" href="{{ route('edit.admin.profile', Auth::id()) }}">
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
    @elseif (Auth::user()->role_id == '1')
        <a href="#" class="brand-link">
            <img src="{{ !empty(Auth::user()->image) ? url('upload/images/' . Auth::user()->image) : url('upload/images/noimage.png') }} "
                alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; height: 33px; width: 37px;">
            <span class="brand-text font-weight-light">Managment System</span>
        </a>
        @if (Auth::user()->flag_id == '1')
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-chart-line"></i>
                                <p>
                                    Dashboard
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
                                    Profile
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
                                    Books 
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
                                    <li>
                                        
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('readed.page') }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Readed Books
                                            </p>
                                        </a>
                                    </li>
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
                                    Comments
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
        @else

        @endif

    @endif
</aside>
