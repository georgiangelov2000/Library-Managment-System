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
                        <i class="fas fa-user-tie"></i>
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
                            @foreach ($data as $key => $gender)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    @if ($gender->name === 'm')
                                        <td class="">
                                            <i style="font-size:2rem" class="ml-4 fas fa-male text-primary"></i>
                                        </td>
                                    @elseif($gender->name === 'f')
                                        <td class="">
                                            <i style="font-size:2rem" class="ml-4 fas fa-female text-danger"></i>
                                        </td>
                                    @endif
                                    <td>{{ $gender->created_at }}</td>
                                    <td>{{ $gender->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('gender.edit', $gender->id) }}" title="edit" id="edit"
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('gender.delete', $gender->id) }}"  title="delete" id="delete"
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
@stop
