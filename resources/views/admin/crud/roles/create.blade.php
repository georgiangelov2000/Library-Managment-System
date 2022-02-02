@extends('layouts.home')
@section('title', 'Managment System - Create Role')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="col d-flex align-center justify-content-between col-md-8 mb-4">
    </div>
    <div class="card card-form card-default col-md-8 ml-4 p-0">
        <div class="card-header">
            <h5 class="m-0">Create Role</h5>
        </div>
        <div class="card-body">
            @include('components.error-box.errors')
            <form method="POST" action="{{ route('role.store') }}" class="d-flex flex-column flex-wrap">
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
    
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/share.js') }}"> </script>
    @endpush
@endsection
