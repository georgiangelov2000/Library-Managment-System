@extends('admin.home')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner d-flex">
                            <div class="col-md-2">
                                <h3>{{ count($users) }}</h3>
                                <p>Users</p>
                            </div>
                            <div class="col-md-4">
                                <small style="position: relative; top: 0px;">
                                    <strong>Visitors: {{ count($visitor) }}
                                    </strong>
                                </small>
                                <small style="margin-top: 16%;
                                            top: 2px;
                                            position: relative;">
                                    <strong>Admins: {{ count($admin) }} </strong>
                                </small>
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
                            <div class="col-md-2">
                                <h3>{{ count($roles) }}</h3>
                                <p>Roles</p>
                            </div>
                            <div class="col-md-4">
                                <small>
                                    @foreach ($roles as $role)
                                        <strong style="padding-bottom: 0% !important; padding-bottom: 5% !important;
                                            display: flex;
                                            align-items: center;
                                            text-align: center;
                                            justify-content: center;" class="p-1">
                                            {{ $role->name }}<br>
                                        </strong>
                                    @endforeach
                                </small>
                            </div>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
