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
                The table is empty please <a href="{{ route('assign.book.create') }}" class="alert-link">
                    Create Data </a>
            </div>
        @else
            @include('components.success-box.successfullly-message')
            <div>
                <div class="card">
                    <div class="card-body table-responsive p-2">
                        <table class="table table-striped table-hover table-bordered dataTable" id="assigned-books">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image(Users)</th>
                                    <th>Users</th>
                                    <th>Images(Books)</th>
                                    <th>Book</th>
                                    <th>Date of precent</th>
                                    <th>Date of return</th>
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
                                            <img src="{{ !empty($value['users']['image']) ? url('upload/images/' . $value['users']['image']) : url('upload/images/noimage.png') }}  "
                                                class="img-thumbnail rounded " style="width:50px" alt="...">
                                        </td>
                                        <td>{{ $value['users']['name'] }}</td>
                                        <td>
                                            <img src="{{ !empty($value['books']['image']) ? url('upload/images/' . $value['books']['image']) : url('upload/images/noimage.png') }}  "
                                                class="img-thumbnail rounded " style="width:50px" alt="...">
                                        </td>
                                        <td>{{ $value['books']['name'] }}</td>
                                        <td>{{ $value->date_of_receipt }}</td>
                                        <td>{{ $value->date_of_return }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>{{ $value->updated_at }}</td>
                                        <td id="assign_book_delete_td">
                                            <a href="{{ route('assign.book.delete', $value->id) }}" title="delete"
                                                id="delete" class="btn btn-sm btn-danger"><i
                                                    class="far fa-trash-alt"></i></a>
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
        <script type="text/javascript" src="{{ mix('js/assigned_books.js') }}"></script>
    @endpush
@endsection
