@extends('layouts.home')
@section('title', 'Managment System - Edit Genre')

@section('content')
    <div class="col d-flex align-center justify-content-between col-md-8 mb-4">
    </div>
    <div class="card card-form card-default col-md-8 ml-4 p-0">
        <div class="card-header">
            <h5 class="m-0">Update Gendre of the book</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('gendre.book.update', $genre->id) }}"
                class="d-flex flex-column flex-wrap">
                @csrf
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input class="form-control form-control-sm" value="{{ $genre->name }}" id="name" type="text"
                        name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" name="Update" value="Update"
                        class="btn btn-primary btn-sm col-md-12">Update</button>
                </div>
            </form>
        </div>
           <div class="card-footer pt-5">
        </div>
    </div>

@endsection
