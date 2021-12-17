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
            <h5 class="m-0"><i class="fas fa-users"></i> Profile</h5>
        </div>
        <div class="card-body">
            <div class="form-group col-md-6">
                <img src="{{ !empty($value->image) ? url('upload/images/'.$user->image) :  url('upload/images/noimage.png') }}  " class="img-thumbnail rounded" style="width:100px" alt="...">
            </div>
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input class="form-control form-control-sm" id="name" disabled value="{{ $user->name }}" type="text"
                    name="name">
                @error('name')
                    <span class="text-danger"> </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input class="form-control form-control-sm" id="email" disabled value="{{ $user->email }}" type="email"
                    name="email">
                @error('name')
                    <span class="text-danger"> </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="dob">Date of Birth</label>
                <input class="form-control form-control-sm" id="dob" disabled value="{{ $user->dob }}" type="text"
                    name="dob">
                @error('name')
                    <span class="text-danger"> </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="role">Role</label>
                @if ($user->role_id === 1)
                    <input class="form-control form-control-sm" id="dob" disabled value="visitor" type="text">
                @endif
                @error('name')
                    <span class="text-danger"> </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                @if ($user->gender_id === 1)
                    <input class="form-control form-control-sm" id="gender_id" disabled value="m" type="text">
                @elseif ($user->gender_id === 2)
                    <input class="form-control form-control-sm" id="gender_id" disabled value="f" type="text">
                @endif
                @error('name')
                    <span class="text-danger"> </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="created_at">Created at</label>
                <input class="form-control form-control-sm" id="created_at" disabled value="{{ $user->created_at }}"
                    type="text" name="created_at">
                @error('name')
                    <span class="text-danger"> </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="updated_at">Updated at</label>
                <input class="form-control form-control-sm" id="updated_at" disabled value="{{ $user->updated_at }}"
                    type="text" name="updated_at">
                @error('name')
                    <span class="text-danger"> </span>
                @enderror
            </div>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>

@endsection
