@extends('admin.home')
@section('title', 'Managment System - Assigned Books')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div class="col-12 p-4">
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover" id="assigned-books">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Year</th>
                                <th>Book_no</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ !empty($value->image) ? url('upload/images/' . $value->image) : url('upload/images/noimage.png') }}  "
                                            class="rounded " style="width:50px" alt="...">
                                    </td>
                                    <td> {{ $value->name }}</td>
                                    <td> {{ $value->year }}</td>
                                    <td> {{ $value->book_no }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/assigned_books.js') }}"></script>
    @endpush
@stop
