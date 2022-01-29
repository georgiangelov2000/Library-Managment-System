@extends('layouts.home')
@section('title', 'Managment System - Genres Authors')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover table-striped dataTable" id="genres">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $genre)
                                <tr>
                                    <td>{{ $genre->id}}</td>
                                    <td>{{ $genre->name }}</td>
                                    <td>{{ $genre->created_at }}</td>
                                    <td>{{ $genre->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('gendre.author.edit', $genre->id) }}" id="edit"
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('gendre.author.delete', $genre->id) }}" id="delete"
                                            class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                                        <a id="assigned-users" href="{{ route('genre.assigned.author', $genre->id) }}"
                                            title="Assigned Books" class="btn btn-sm btn-warning"><i class="far fa-users"
                                                aria-hidden="true"></i>
                                            </i>
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
        <script type="text/javascript" src="{{ mix('js/genres.js') }}"></script>
    @endpush
@endsection
