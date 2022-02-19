@extends('layouts.home')
@section('title', 'Managment System - Assigned Books')

@section('content')
    <div class="row m-auto pt-2">
        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable table-striped" id="assigned-books">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Book_no</th>
                                <th>Genre</th>
                                <th>Date of receipt</th>
                                <th>Date of return</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $book)
                                <tr>
                                    <td>{{ $book->id}}</td>
                                    <td> {{ $book['books']['name'] }}
                                    <td>
                                        <img src="{{ !empty($book['books']['image']) ? url('upload/images/' . $book['books']['image']) : url('upload/images/noimage.png') }}  "
                                            alt="...">
                                    </td>
                                    <td> {{ $book['books']['book_no'] }}</td>
                                    <td> {{ $book['books']['genres']['name'] }}</td>
                                    <td>{{ $book->date_of_receipt }}</td>
                                    <td>{{ $book->date_of_return }}</td>
                                    <td>
                                        <button 
                                        id="delete" 
                                        href="{{ route('delete.assign.book', $book->id ) }}"
                                        title="Delete" 
                                        class="btn btn-sm btn-danger">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
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
@endsection
