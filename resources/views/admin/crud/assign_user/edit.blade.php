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
            <h5 class="m-0">Edit Book</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('assign.user.update', $editData['0']->id) }}"
                class="d-flex flex-wrap flex-column">
                @csrf

                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input class="form-control form-control-sm" id="name" value="{{ $editData['0']->name }}" type="text"
                        name="name" placeholder="Name">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="author_id">Select Author</label>
                    <select class="form-control form-control-sm" name="user_id" id="user_id" aria-invalid="false">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }} "
                                {{ $editData['0']->user_id == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    </select>
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
