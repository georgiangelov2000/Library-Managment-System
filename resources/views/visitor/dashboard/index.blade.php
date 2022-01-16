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
        <div class="container-fluid card card-primary card-outline col-md-11 ">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
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
            <div class="row w-100 m-auto">
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner d-flex">
                                <div class="col-md-7">
                                    <h3>{{ $commentsCollection->count() }}</h3>
                                    <p>My Comments</p>
                                </div>
                            </div>
                            <div class="icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <a href="{{ route('comment.show',Auth::id()) }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">

                                <h3>{{ $allBooks->count() }}</h3>
                                <p>My Books</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="{{ route('visitors.books') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $bookFavCount->count() }}</h3>
                                <p>My Favourite Books</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-heart"></i>
                            </div>
                            <a href="{{ route('favourites.page') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-md-12 d-flex align-items-center justify-content-center">

                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3>{{ $bookIncCount->count() }}</h3>
                                <p>My Incoming Books</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-thumbs-up"></i>
                            </div>
                            <a href="{{ route('incomings.page') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $bookReadedCount->count() }}</h3>
                                <p>My Readed Books</p>
                            </div>
                            <div class="icon">
                                <i class="fab fa-readme"></i>
                            </div>
                            <a href="{{ route('readed.page') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>



                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner d-flex">
                                <div class="col-md-8">
                                    <h3>{{ $bookArchCount->count() }}</h3>
                                    <p>My Archived Books</p>
                                </div>
                            </div>
                            <div class="icon">
                                <i class="fas fa-archive"></i>
                            </div>
                            <a href="{{ route('archived.page') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
@endsection
