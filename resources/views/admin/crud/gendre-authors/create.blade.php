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
        @include('components.error-box.errors')
        <div class="card-header">
            <h5 class="m-0">Create Genre of the Author</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('gendre.author.store') }}" class="d-flex flex-column flex-wrap">
                @csrf
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input class="form-control form-control-sm" id="name" type="text" name="name" placeholder="Name">
                    @error('name')
                        <span class="text-danger"> </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" name="submit" value="submit"
                        class="btn btn-primary btn-sm col-md-12">Submit</button>
                </div>
            </form>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>

@endsection