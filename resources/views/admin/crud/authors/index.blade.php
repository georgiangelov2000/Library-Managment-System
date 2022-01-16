@extends('admin.home')
@section('title', 'Managment System - Authors')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        @include('components.success-box.successfullly-message')
        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover" id="authors">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Genres</th>
                                <th>Genders</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value['genres']['name'] }}</td>
                                    <td>{{ $value['genders']['name'] }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('author.edit', $value->id) }}" id="edit"
                                            class="btn btn-sm btn-info" title="edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('author.delete', $value->id) }}" id="delete"
                                            class="btn btn-sm btn-danger" title="delete">
                                            <i class="far fa-trash-alt"></i>
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
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/authors.js') }}"></script>
    @endpush
@stop
