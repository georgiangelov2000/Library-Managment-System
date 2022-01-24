@extends('admin.home')
@section('title', 'Managment System - Assigned Books')

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
                    <table class="table table-hover " id="assigned-books">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Image(User)</th>
                                <th>User</th>
                                <th>Image(Book)</th>
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
                                         alt="...">
                                    </td>
                                    <td>{{ $value['users']['name'] }}</td>
                                    <td>
                                        <img src="{{ !empty($value['books']['image']) ? url('upload/images/' . $value['books']['image']) : url('upload/images/noimage.png') }}  "
                                         alt="...">
                                    </td>
                                    <td>{{ $value['books']['name'] }}</td>
                                    <td>{{ $value->date_of_receipt }}</td>
                                    <td>{{ $value->date_of_return }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td id="assign_book_delete_td">
                                        <a href="{{ route('assign.book.delete', $value->id) }}" title="delete" id="delete"
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
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/assigned_books.js') }}"></script>
    @endpush
@endsection
