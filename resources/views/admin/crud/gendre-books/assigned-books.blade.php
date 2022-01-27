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
                    <table class="table table-hover  dataTable" id="assigned-books">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Book_no</th>
                                <th>Genre</th>
                                <th>Year</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $key => $book)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td> {{ $book->name }}</td>
                                    <td>
                                        <img src="{{ !empty($book->image) ? url('upload/images/' . $book->image) : url('upload/images/noimage.png') }}  "
                                             alt="...">
                                    </td>
                                    <td> {{ $book->book_no }}</td>
                                    <td> {{ $book['genres']['name'] }}</td>
                                    <td> {{ $book->year }}</td>
                                    <td> {{ $book['authors']['name'] }}</td>
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
