@extends('layouts.home')
@section('title', 'Managment System - Incomings')

@section('content')

    <div class="row m-auto">
        <div class="col-12 m-auto pt-4">
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover table-striped dataTable" id="statusBooks">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Genre</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $key => $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>
                                        <img src="{{ !empty($book->image) ? url('upload/images/' . $book->image) : url('upload/images/noimage.png') }}  "
                                              alt="...">
                                    </td>
                                    <td>
                                        {{ $book->name }}
                                    </td>
                                    <td>
                                        {{ $book['genres']['name'] }}
                                    </td>
                                    <td> 
                                        {{$book['flags']['name']}}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('comment.show', $book->id) }}" id="view-comment"
                                                type="button" class="btn btn-sm btn-dark float-left mr-1"
                                                title="View comments">
                                                <i class="fas fa-comments"></i>
                                            </a>

                                            <a href="{{ route('show.book', $book->id) }}" class="btn btn-sm btn-secondary" id="book-details"
                                                title="Details">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                    </td>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/statusBooks.js') }}"></script>
    @endpush
@endsection
