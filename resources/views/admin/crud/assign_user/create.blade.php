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
            <h5 class="p-0">Create collection of books</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('assign.user.update') }}" class="d-flex flex-wrap flex-column">
                @csrf


                <div class="form-group col-md-6">
                    <label for="user_id">Select User</label>
                    <select class="form-control form-control-sm" name="user_id[]" id="user_id" aria-invalid="false">
                        @foreach ($users as $user)
                            <option value=" {{ $user->id }} ">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="name">Select Books</label>
                    <select class="form-control form-control-sm" name="name" id="name" aria-invalid="false">
                        @foreach ($books as $book)
                            <option value=" {{ $book->id }} ">{{ $book->name }}</option>
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
