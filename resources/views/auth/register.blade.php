@extends('layouts.app')
@section('title', '- Register')

@section('content')
<h3 class=" text-center pb-0 mb-4"> {{ __('Register') }} </h3>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card card-primary card-outline card-tabs p-0 col-md-4">
                <div class="card-header p-0 pt-1 border-bottom-0">

                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                aria-selected="true">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile"
                                aria-selected="false">Admin</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body pt-0">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                            aria-labelledby="custom-tabs-three-home-tab">
                            <x-register-user />
                            <blockquote>
                                <p> Register as user, and start to apply for job
                                </p>
                            </blockquote>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                            aria-labelledby="custom-tabs-three-profile-tab">
                            <x-register-admin />
                            <blockquote>
                                <p>Login as owner's company, and find candidates</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
