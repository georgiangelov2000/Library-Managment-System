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
                                <th>E-mail</th>
                                <th>Genders</th>
                                <th>Date of birth</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    @if ($value->gender_id === 1)
                                        <td class="">
                                            <i style="font-size:2rem" class="ml-4 fas fa-male text-primary"></i>
                                        </td>
                                    @elseif($value->gender_id === 2)
                                        <td class="">
                                            <i style="font-size:2rem" class="ml-4 fas fa-female text-danger"></i>
                                        </td>
                                    @endif
                                    <td>{{ $value->dob }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
