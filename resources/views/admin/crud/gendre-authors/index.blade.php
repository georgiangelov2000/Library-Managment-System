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
                The table is empty please <a href="{{ route('gendre.author.create') }}" class="alert-link">
                    Create Data </a>
            </div>
        @else
            @include('components.success-box.successfullly-message')
            <div>
                <div class="card">
                    <div class="card-body table-responsive p-2">
                        <table class="table table-hover" id="genres">
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
                                @foreach ($allData as $key => $genre)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $genre->name }}</td>
                                        <td>{{ $genre->created_at }}</td>
                                        <td>{{ $genre->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('gendre.author.edit', $genre->id) }}" id="edit"
                                                class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('gendre.author.delete', $genre->id) }}" id="delete"
                                                class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                                            <a id="assigned-users" href="{{ route('genre.assigned.author', $genre->id) }}"
                                                title="Assigned Books" class="btn btn-sm btn-warning"><i
                                                    class="far fa-users" aria-hidden="true"></i>
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
        @endif
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/genres.js') }}"></script>
    @endpush
@endsection
