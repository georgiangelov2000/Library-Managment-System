@extends('layouts.app')
@section('title', '- Register')

@section('content')

    <div class="register-box d-flex flex-column align-items-center m-auto col-md-6">
        <div class="card card-outline card-primary w-100 mt-3">
            <div class="card-body login-card-body">
                <h3 class="login-box-msg"> {{ __('Register') }} </h3>
                @include('components.error-box.error-auth')
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group mb-3 col-6">
                            <label>Name</label>
                            <input id="name" type="text" class="form-control form-control-sm" name="name"
                                value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Name">
                        </div>

                        <div class="form-group mb-3 col-6">
                            <label>Email</label>
                            <input id="email" type="email" class="form-control form-control-sm" name="email"
                                value="{{ old('email') }}" autocomplete="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3 col-6">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control form-control-sm" name="password"
                                autocomplete="new-password" placeholder="Password">
                        </div>

                        <div class="form-group mb-3 col-6">
                            <label>Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control form-control-sm"
                                name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                        </div>

                        <div class="form-group mb-3 col-6">
                            <label>Select Date</label>
                            <input id="dob" type="date" class="form-control form-control-sm" name="dob">
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Select Gender</label>
                                <select class="form-control form-control-sm" name="gender_id" id="gender_id">
                                    @foreach ($genders as $gender)
                                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Select User Flags</label>
                                <select class="form-control form-control-sm" name="flag_id" id="flag_id">
                                    @foreach ($flags as $flag)
                                        <option value="{{ $flag->id }}">{{ $flag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Select User Role</label>
                                <select class="form-control form-control-sm" name="role_id" id="role_id">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/messages.js') }}"> </script>
    @endpush
@endsection
