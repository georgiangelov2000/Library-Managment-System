@extends('admin.home')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div class="col-12 p-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-swatchbook"></i>
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
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr style="font-size:.85rem">
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Content</th>
                                <th>Year</th>
                                <th>Book_No</th>
                                <th>Author</th>
                                <th>Genre</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ !empty($value->image) ? url('upload/images/' . $value->image) : url('upload/images/noimage.png') }}  "
                                            class="img-thumbnail rounded mx-auto d-block" style="width:100px" alt="...">
                                    </td>
                                    <td>
                                        {{ $value->name }}
                                    </td>
                                    <td>
                                        <div class="overflow-auto p-3 mb-3 mb-md-0 me-md-3 bg-light"
                                            style="font-size:.8rem">
                                            {{ $value->content }}
                                        </div>
                                    </td>
                                    <td>{{ $value->year }}</td>
                                    <td>{{ $value->book_no }}</td>
                                    <td>{{ $value['authors']['name'] }}</td>
                                    <td>{{ $value['genres']['name'] }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td style="width:8%;">
                                        <a href="{{ route('book.edit', $value->id) }}" style="float:right; margin-left:2px;"  title="edit" id="edit"
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('book.delete', $value->id) }}" style="float:right; margin-left:2px;" title="delete" id="delete"
                                            class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i>
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
@stop
