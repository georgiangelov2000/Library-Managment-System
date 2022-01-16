@extends('admin.home')
@section('title', 'Managment System - Edit User')

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
            <h5 class="m-0">Edit User</h5>
        </div>
        <div class="card-body">
            <form method="POST" multipart="true" enctype="multipart/form-data"
                action="{{ route('user.update', $editData['0']->id) }}" class="d-flex flex-wrap flex-column">
                @csrf

                <div class="col-md-6 d-flex justify-content-left">
                    <img src="{{ !empty($editData['0']->image) ? url('upload/images/' . $editData['0']->image) : url('upload/images/noimage.png') }}  "
                        class="img-thumbnail rounded mb-1" style="width:50px" alt="...">
                </div>

                <div class="form-group col-md-6">
                    <label for="image" class="form-label">File</label>
                    <input class="form-control form-control-sm" name="image" type="file" id="image">
                </div>

                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input class="form-control form-control-sm" id="name" value="{{ $editData['0']->name }}" type="text"
                        name="name" placeholder="Name">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="role_id">Select Role</label>
                    <select class="form-control form-control-sm" name="role_id" id="role_id" aria-invalid="false">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }} "
                                {{ $editData['0']->role_id == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="gender_id">Select Gender</label>
                    <select class="form-control form-control-sm" name="gender_id" id="gender_id" aria-invalid="false">
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->id }} "
                                {{ $editData['0']->gender_id == $gender->id ? 'selected' : '' }}>
                                {{ $gender->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input class="form-control form-control-sm" id="email" value="{{ $editData['0']->email }}"
                        type="email" name="email" placeholder="email">

                </div>

                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input class="form-control form-control-sm" id="dob" value="{{ $editData['0']->dob }}" type="date"
                        name="dob" placeholder="dob">

                </div>

                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input class="form-control form-control-sm" id="password" value="" type="password" name="password"
                        placeholder="password">
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

@endsection
