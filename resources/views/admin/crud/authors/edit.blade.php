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
            <h5 class="m-0">Edit Author</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('author.update', $editData['0']->id) }}"
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
                    <label for="genre_id">Select Genre</label>
                    <select class="form-control form-control-sm" name="genre_id" id="genre_id" aria-invalid="false">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }} "
                                {{ $editData['0']->genre_id == $genre->id ? 'selected' : '' }}>
                                {{ $genre->name }}
                            </option>
                        @endforeach
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
