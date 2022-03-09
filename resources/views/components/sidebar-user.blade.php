<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                        <a class="nav-link" href="{{ route('edit.profile') }}">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('readed.page') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Readed Books
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('archived.page') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Archived Books
                            </p>
                        </a>
                    </li>
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
