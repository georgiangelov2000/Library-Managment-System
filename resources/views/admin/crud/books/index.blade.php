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
                The table is empty please <a href="{{ route('book.create') }}" class="alert-link">
                    Create Data </a>
            </div>
        @else
            @include('components.success-box.successfullly-message')
            <div>
                <div class="card">
                    <div class="card-body table-responsive p-2">
                        <table class="table table-striped table-hover table-bordered dataTable" id="books">
                            <thead>
                                <tr>
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
                                                class="img-thumbnail rounded mx-auto d-block" style="width:50px" alt="...">
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
                                        <td style="width:13%;">
                                            <a href="{{ route('book.edit', $value->id) }}"
                                                style="float:right; margin-left:2px;" title="edit" id="edit"
                                                class="btn btn-sm btn-info"><i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('book.delete', $value->id) }}"
                                                style="float:right; margin-left:2px;" title="delete" id="delete"
                                                class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i>
                                            </a>
                                            <a style="float:right; margin-left:2px;"
                                                href="{{ route('user.assigned.user', $value->id) }}"
                                                title="assigned-users" id="Assigned Users" class="btn btn-sm btn-warning"><i
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
        <script type="text/javascript" src="{{ mix('js/books.js') }}"></script>
    @endpush
@endsection
