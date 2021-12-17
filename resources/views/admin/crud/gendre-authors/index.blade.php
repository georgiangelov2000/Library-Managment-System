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
                        Type of the Authors
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
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $gendre)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $gendre->name }}</td>
                                    <td>{{ $gendre->created_at }}</td>
                                    <td>{{ $gendre->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('gendre.author.edit', $gendre->id) }}" id="edit"
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('gendre.author.delete', $gendre->id) }}" id="delete"
                                            class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
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
