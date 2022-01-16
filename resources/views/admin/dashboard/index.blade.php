@extends('admin.home')
@section('title', 'Managment System - Dashboard')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="content-header mb-2">
        <div class="container-fluid">

        </div>
    </div>


    <section class="content">
        <div class="container-fluid card card-primary card-outline col-md-11">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2 class="m-0">Dashboard</h2>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row w-100 m-auto mb-3">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner d-flex">
                            <div>
                                <h3>{{ count($users) }}</h3>
                                <p>Users</p>
                            </div>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <a href="{{ route('user.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">

                            <h3>{{ count($authors) }}</h3>

                            <p>Authors</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-edit"></i>
                        </div>
                        <a href="{{ route('author.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ count($books) }}</h3>

                            <p>Books</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <a href="{{ route('book.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner d-flex">
                            <div>
                                <h3>{{ count($roles) }}</h3>
                                <p>Roles</p>
                            </div>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="content-header mt-0 pt-0">
                <div class="col-sm-6">
                    <h2>Additional information</h2>
                </div>
                <div class="container-fluid">
                    <hr style="height:1.5px">
                </div>
            </div>
            <div class="row w-100 m-auto">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="waiting-users-wrapper"><i class="fa fa-spinner"
                                aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Waiting Users</span>
                            <span class="info-box-number">
                                10
                                <small>%</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="approved-users-wrapper"><i class="fa fa-check"
                                aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Approved Users</span>
                            <span class="info-box-number">
                                10
                                <small>%</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="assigned-books-wrapper"><i class="fas fa-tasks"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Assigned Books</span>
                            <span class="info-box-number">
                                10
                                <small>%</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="genders-wrapper"><i class="fa fa-transgender"
                                aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Genders</span>
                            <span class="info-box-number">
                                10
                                <small>%</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="genres-books-wrapper"><i class="fas fa-user-edit"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Genres Books</span>
                            <span class="info-box-number">
                                10
                                <small>%</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="genres-authors-wrapper"><i class="fas fa-book"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Genres Authors</span>
                            <span class="info-box-number">
                                10
                                <small>%</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="comments-wrapper"><i class="fas fa-comments"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Comments</span>
                            <span class="info-box-number">
                                10
                                <small>%</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1" id="readers-wrapper"><i class="fa fa-users" aria-hidden="true"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Readers</span>
                            <span class="info-box-number">
                                10
                                <small>%</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>


            </div>

        </div>

    </section>
@endsection
