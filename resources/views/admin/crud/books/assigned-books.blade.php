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
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-book-open"></i>
                    </h3>

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
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover" id="assigned-books">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Book_no</th>
                                <th>Date of receipt</th>
                                <th>Date of return</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td> {{ $value['books']['name'] }}
                                    <td>
                                        <img src="{{ !empty($value['books']['image']) ? url('upload/images/' . $value['books']['image']) : url('upload/images/noimage.png') }}  "
                                            class=" rounded " style="width:50px" alt="...">
                                    </td>
                                    <td> {{ $value['books']['book_no'] }}
                                    </td>
                                    <td>{{ $value->date_of_receipt }}</td>
                                    <td>{{ $value->date_of_return }}</td>
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
