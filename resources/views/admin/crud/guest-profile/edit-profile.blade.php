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
            <h5 class="m-0"> <i class="fas fa-id-card"></i> Edit Profile</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('update.profile', $user['0']->id) }}" enctype="multipart/form-data"
                class="d-flex flex-wrap flex-column">
                @csrf
                <div class="form-group col-md-6">
                    <img src="{{ !empty($user['0']->image) ? url('upload/images/' . $user['0']->image) : url('upload/images/noimage.png') }}  "
                        class="img-thumbnail rounded" style="width:50px" alt="...">
                </div>
                <div class="form-group col-md-6">
                    <label for="image" class="form-label">File</label>
                    <input class="form-control form-control-sm" name="image" type="file" id="image">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input class="form-control form-control-sm" id="name" value="{{ $user['0']->name }}" type="text"
                        name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input class="form-control form-control-sm" id="email" value="{{ $user['0']->email }}" type="email"
                        name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input class="form-control form-control-sm" id="dob" type="date" value="{{ $user['0']->dob }}"
                        type="text" name="dob">
                </div>

                <div class="form-group col-md-6">
                    <label for="gender_id">Select Gender</label>
                    <select class="form-control form-control-sm" name="gender_id" id="gender_id" aria-invalid="false">
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->id }} "
                                {{ $user['0']->gender_id == $gender->id ? 'selected' : '' }}>
                                {{ $gender->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <button type="submit"
                        class="btn btn-block bg-gradient-primary btn-sm text-light col-md-8">Update</button>
                </div>
            </form>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>

@endsection
