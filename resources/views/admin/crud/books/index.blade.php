@extends('layouts.home')
@section('title', 'Managment System - Books')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable table-striped" id="books">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Genre</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>
                                        <img src="{{ !empty($book->image) ? url('upload/images/' . $book->image) : url('upload/images/noimage.png') }}  "
                                            alt="...">
                                    </td>
                                    <td>
                                        {{ $book->name }}
                                    </td>
                                    <td>{{ $book['genres']['name'] }}</td>
                                    <td style="width:18%;">
                                        <a href="{{ route('book.edit', $book->id) }}" title="Edit" id="edit"
                                            class="btn btn-sm btn-info float-left mr-1 "><i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('book.delete', $book->id) }}" title="delete" id="delete"
                                            class="btn btn-sm btn-danger float-left mr-1"><i class="far fa-trash-alt"></i>
                                        </a>
                                        <a href="{{ route('user.assigned.user', $book->id) }}" title="assigned-users"
                                            id="Assigned Users" class=" float-left mr-1 btn btn-sm btn-warning"><i
                                                class="far fa-users"></i>
                                        </a>
                                        <a href="{{ route('show.book', $book->id) }}" class="btn btn-sm btn-secondary" id="book-details"
                                            title="Details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a href="{{ route('comment.show.users', $book->id) }}" id="view-comment"
                                            class="btn btn-sm btn-dark" title="View comments">
                                            <i class="fas fa-comments"></i>
                                        </a>
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
        <script type="text/javascript" src="{{ mix('js/books.js') }}"></script>
    @endpush
@endsection
