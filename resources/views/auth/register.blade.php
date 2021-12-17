@extends('layouts.app')

@section('content')

    <body class="login-page">

        <div class="login-box">
            <div class="login-logo">
                <h3>
                    <a href="{{ route('home') }}"><b>Library Managment System</b></a>
                </h3>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg"> {{ __('Register') }} </p>
                    <form method="post" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Password">

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="Confirm Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-unlock"></i>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
