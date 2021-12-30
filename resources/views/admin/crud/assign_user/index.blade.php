@extends('admin.home')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        @if (count($allData) == 0)
            <div class="alert alert-danger alert-dismissible col-md-10 m-auto">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                The table is empty please <a href="{{ route('assign.book.create') }}" class="alert-link">
                    Create Data </a>
            </div>
        @else
            <div class="col-12 p-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Assign Users to book
                        </h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

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
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>Book_No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->content }}</td>
                                        <td>{{ $value->book_no }}</td>
                                        <td style="width:11%;">
                                            <a style="float:right; margin-left:2px;"
                                                href="{{ route('assign.user.edit', $value->id) }}" title="edit" id="edit"
                                                class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                            <a style="float:right" id="details" class="btn btn-sm btn-primary"
                                                title="details"><i class="fas fa-info-circle"></i>

                                            </a>
                                            <a style="float:right;margin-right:2px;"
                                                href="{{ route('assign.user.delete', $value->id) }}" title="delete"
                                                id="delete" class="btn btn-sm btn-danger"><i
                                                    class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
