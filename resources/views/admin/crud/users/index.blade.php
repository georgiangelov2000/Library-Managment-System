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
                        <i class="fa fa-users" aria-hidden="true"></i>
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
                    <table class="table table-hover ">
                        <thead>
                            <tr style="font-size:.8rem">
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Roles</th>
                                <th>Genders</th>
                                <th>Date of birth</th>
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
                                        <img src="{{ !empty($value->image) ? url('upload/images/'.$value->image) :  url('upload/images/noimage.png') }}  " class="img-thumbnail rounded mx-auto d-block" style="width:100px" alt="...">
                                    </td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    @if ($value->role_id === 2)
                                        <td class="text-center">
                                            <i class="fas fa-user-lock"></i>
                                        </td>
                                    @elseif($value->role_id === 1)
                                        <td class="text-center">
                                            <i class="fas fa-user-tie"></i>
                                        </td>
                                    @endif
                                    @if ($value->gender_id === 1)
                                        <td class="text-center">
                                            <i style="font-size:2rem" class="fas fa-male text-primary"></i>
                                        </td>
                                    @elseif($value->gender_id === 2)
                                        <td class="text-center">
                                            <i style="font-size:2rem" class="fas fa-female text-danger"></i>
                                        </td>
                                    @endif
                                    <td>{{ $value->dob }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $value->id) }}" title="edit" id="edit"
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('user.delete', $value->id) }}" id="delete" title="delete"
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
