@extends('layouts.home')
@section('title', 'Managment System - Create Book')

@section('content')

    <div class="col d-flex align-center justify-content-between col-md-8 mb-4">
    </div>

    <div class="card card-form card-default p-0 col-md-8 ml-4">
        <div class="card-header">
            <h5 class="m-0">Create Book</h5>
        </div>
        <div class="card-body">
            @include('components.error-box.errors')
            <form method="POST" multipart="true" enctype="multipart/form-data" action="{{ route('book.store') }}"
                class="d-flex flex-wrap flex-column">
                @csrf
                <div class="row justify-content-end">
                <div class="form-group col-md-6">
                    <label for="image" class="form-label">File</label>
                    <input class="form-control form-control-sm" name="image" type="file" id="image">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input class="form-control form-control-sm" id="name" type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="year">Date of Create</label>
                    <input class="form-control form-control-sm" id="year" type="date" name="year" placeholder="Year">
                </div>
                <div class="form-group col-md-6">
                    <label for="author_id">Select Author</label>
                    <select class="form-control form-control-sm" name="author_id" id="author_id" aria-invalid="false">
                        @foreach ($authors as $author)
                            <option value=" {{ $author->id }} ">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="genre_id">Select Genre</label>
                    <select class="form-control form-control-sm" name="genre_id" id="genre_id" aria-invalid="false">
                        @foreach ($genres as $genre)
                            <option value=" {{ $genre->id }} ">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Content</label>
                    <textarea class="form-control form-control-sm" id="content" name="content" placeholder="Content"
                        rows="3"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" name="submit" value="submit"
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
