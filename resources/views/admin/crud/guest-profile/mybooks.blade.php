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
                <div class="card-body table-responsive p-2">
                    <table class="table table-striped table-hover table-bordered dataTable" id="mybooks">
                        <thead>
                            <tr>
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
                                        <img src="{{ !empty($book['books']['image']) ? url('upload/images/' . $book['books']['image']) : url('upload/images/noimage.png') }}  "
                                            class="img-thumbnail rounded" style="width:50px" alt="...">
                                    </td>
                                    <td>
                                        <span class="badge badge-light text-dark">
                                            {{ $book['books']['name'] }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">
                                            {{ $book['books']['authors']['name'] }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary">
                                            {{ $book['books']['genres']['name'] }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="overflow-auto p-3 mb-3 mb-md-0 me-md-3 bg-light" style="font-size:.8rem">
                                            {{ $book['books']['content'] }}
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-dark">
                                            {{ $book['books']['year'] }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">
                                            {{ $book['books']['book_no'] }}
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
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/mybooks.js') }}"></script>
    @endpush
@endsection
