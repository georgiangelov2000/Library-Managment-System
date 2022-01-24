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
                    <table class="table table-hover dataTable" id="assigned-books">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Book_no</th>
                                <th>Date of receipt</th>
                                <th>Date of return</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td> {{ $value['books']['name'] }}
                                    <td>
                                        <img src="{{ !empty($value['books']['image']) ? url('upload/images/' . $value['books']['image']) : url('upload/images/noimage.png') }}  "
                                            alt="...">
                                    </td>
                                    <td> {{ $value['books']['book_no'] }}
                                    </td>
                                    <td>{{ $value->date_of_receipt }}</td>
                                    <td>{{ $value->date_of_return }}</td>
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
