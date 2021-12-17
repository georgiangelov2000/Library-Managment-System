@extends('admin.home')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto">
        <div class="col-12 m-auto pt-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-book"></i> My Books</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr style="font-size:.85rem">
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Genre</th>
                                <th>Content</th>
                                <th>Year</th>
                                <th>Book_No</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $key => $book)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ !empty($value->image) ? url('upload/images/' . $value->image) : url('upload/images/noimage.png') }}  "
                                            class="img-thumbnail rounded" style="width:100px" alt="...">
                                    </td>
                                    <td>
                                        <span class="badge badge-light text-dark">
                                        {{ $book->name }}
                                    </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">
                                            {{ $book['genres']['name'] }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary">
                                            {{ $book['genres']['name'] }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="overflow-auto p-3 mb-3 mb-md-0 me-md-3 bg-light" style="font-size:.8rem">
                                            {{ $book->content }}
                                        </div>
                                    </td>
                                    <td>
                                        @if ($book->year === null)

                                        @elseif ($book->year)
                                            <span class="badge badge-dark">
                                                {{ $book->year }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">
                                            {{ $book->book_no }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
