@extends('layouts.home')
@section('title', 'Managment System - Authors')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <x-header-page message="" routeLink="delete.authors" buttonID="delete" button="Delete All Records" heading="Authors" />

        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable table-striped" id="authors">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Genres</th>
                                <th>Genders</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $key => $author)
                                <tr>
                                    <td>{{ $author->id }}</td>
                                    <td>{{ $author->name }}</td>
                                    <td>{{ $author['genres']['name'] }}</td>
                                    <td>{{ $author['genders']['name'] }}</td>
                                    <td>{{ $author->created_at }}</td>
                                    <td>{{ $author->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('author.edit', $author->id) }}" id="edit"
                                            class="btn btn-sm btn-info" title="edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('author.delete', $author->id) }}" id="delete"
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
