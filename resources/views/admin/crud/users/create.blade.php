@extends('admin.home')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="col d-flex align-center justify-content-between col-md-8 mb-4">
    </div>


    <div class="card card-default col-md-8 ml-4 p-0">

        <div class="card-header">
            <h5 class="m-0">Create User</h5>
        </div>
        <div class="card-body">
            @include('components.error-box.errors')
            <form method="POST" action="{{ route('user.store') }}" multipart="true" enctype="multipart/form-data"
                class="d-flex flex-wrap flex-column">
                @csrf
                <div class="form-group col-md-6">
                    <label for="image" class="form-label">File</label>
                    <input class="form-control form-control-sm" name="image" type="file" id="image">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input class="form-control form-control-sm" id="name" type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="role_id">Select Role</label>
                    <select class="form-control form-control-sm" name="role_id" id="role_id" aria-invalid="false">
                        @foreach ($roles as $role)
                            <option value=" {{ $role->id }} ">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="gender_id">Select Gender</label>
                    <select class="form-control form-control-sm" name="gender_id" id="gender_id" aria-invalid="false">
                        @foreach ($genders as $gender)
                            <option value=" {{ $gender->id }} ">{{ $gender->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input class="form-control form-control-sm" id="email" type="email" name="email" placeholder="Email">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Date of birth</label>
                    <input class="form-control form-control-sm" id="dob" type="date" name="dob" placeholder="">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input class="form-control form-control-sm" id="password" type="password" name="password"
                        placeholder="Password">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <button style="margin-top: 2rem;" type="submit" name="submit" value="submit"
                        class="btn btn-primary btn-sm col-md-12">Submit</button>
                </div>
            </form>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/messages.js') }}"> </script>
    @endpush
@endsection
