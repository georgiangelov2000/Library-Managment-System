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
                The table is empty please <a href="{{ route('gender.create') }}" class="alert-link">
                    Create Data </a>
            </div>
        @else
            @include('components.success-box.successfullly-message')
            <div>
                <div class="card">
                    <div class="card-body table-responsive p-2">
                        <table class="table table-striped table-hover table-bordered dataTabl" id="genders">
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
                                @foreach ($allData as $key => $gender)
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
                                            <a href="{{ route('gender.delete', $gender->id) }}" title="delete" id="delete"
                                                class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                                            <a title="assigned-users" href="{{ route('assigned.users', $gender->id) }}"
                                                id="assigned Users" class="btn btn-sm btn-warning"><i
                                                    class="far fa-users"></i>
                                            </a>
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
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/genders.js') }}"></script>
    @endpush
@stop
