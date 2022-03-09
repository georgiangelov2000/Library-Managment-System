@extends('layouts.home')
@section('title', 'Managment System - Create User')


@section('content')

    <div class="col d-flex align-center justify-content-between col-md-8 mb-4">
    </div>


    <div class="card card-form card-default col-md-10 ml-4 p-0">

        <div class="card-header">
            <h5 class="m-0">Create User</h5>
        </div>
        <div class="card-body">
            @include('components.error-box.errors')
            <form method="POST" action="{{ route('user.store') }}" multipart="true" enctype="multipart/form-data"
                class="d-flex flex-wrap flex-column">
                @csrf
                <div class="row">
                    <div class="form-group col-md-5">
                        <label for="image" class="form-label">File</label>
                        <input 
                            class="form-control form-control-sm @error('image') is-invalid @enderror" 
                            name="image" 
                            required
                            type="file" 
                            id="image">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <label for="name">Name</label>
                        <input 
                            class="form-control form-control-sm @error('name') is-invalid @enderror" 
                            id="name" 
                            type="text" 
                            name="name"
                            required 
                            placeholder="Name"
                            >
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-5">
                        <label for="gender_id">Select Gender</label>
                        <select 
                            class="form-control form-control-sm @error('gender_id') is-invalid @enderror" 
                            name="gender_id" 
                            required
                            id="gender_id" 
                            aria-invalid="false">
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                            @endforeach
                        </select>
                        @error('gender_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-5">
                        <label>Select User Flags</label>
                        <select 
                            class="form-control form-control-sm @error('flag_id') is-invalid @enderror" 
                            name="flag_id" 
                            required
                            id="flag_id">
                            @foreach ($flags as $flag)
                                <option value="{{ $flag->id }}">{{ $flag->name }}</option>
                            @endforeach
                        </select>
                        @error('flag_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-5">
                        <label for="role_id">Select Role</label>
                        <select 
                            class="form-control form-control-sm @error('role_id') is-invalid @enderror" 
                            name="role_id" 
                            required
                            id="role_id" 
                            aria-invalid="false"
                            >
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" dataname="{{ $role->name }}">{{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-5">
                        <label for="email">Email</label>
                        <input 
                            class="form-control form-control-sm @error('email') is-invalid @enderror" 
                            id="email" 
                            required
                            type="email" 
                            name="email"
                            placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <label for="dob">Date of birth</label>
                        <input 
                            class="form-control form-control-sm @error('dob') is-invalid @enderror" 
                            id="dob" 
                            required
                            type="date" 
                            name="dob" 
                            >
                        @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <label for="password">Password</label>
                        <input 
                            class="form-control form-control-sm @error('password') is-invalid @enderror" 
                            id="password" 
                            required
                            type="password" 
                            name="password"
                            placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-5">
                        <button style="margin-top: 1.8rem;" type="submit" name="submit" value="submit"
                            class="btn btn-primary btn-sm col-md-12">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/share.js') }}"> </script>
    @endpush
@endsection
