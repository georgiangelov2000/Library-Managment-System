@extends('admin.home')
@section('title', 'Managment System - Edit Book')

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
            <form method="POST" multipart="true" enctype="multipart/form-data"
                action="{{ route('book.update', $editData['0']->id) }}" class="d-flex flex-wrap flex-column">
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
                    <label for="content">Content</label>
                    <input class="form-control form-control-sm" id="content" value="{{ $editData['0']->content }}"
                        type="text" name="content">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="year">Year </label>
                    <input class="form-control form-control-sm" type="date" id="year" value="{{ $editData['0']->year }}"
                        type="text" name="year" placeholder="Year">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="author_id">Select Author</label>
                    <select class="form-control form-control-sm" name="author_id" id="author_id" aria-invalid="false">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }} "
                                {{ $editData['0']->author_id == $author->id ? 'selected' : '' }}>
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
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
