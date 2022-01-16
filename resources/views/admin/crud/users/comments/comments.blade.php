@extends('admin.home')
@section('title', 'Managment System - Comments')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="col-md-11 m-auto mt-3">
        <div class="card card-primary card-outline">

            <div class="card-header bg-white">
                <h3 class="card-title mb-0">Comments</h3>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive comment-messages">
                    <table class="table table-hover table-striped m-0">
                        <tbody>
                            @if (count($comments) <= 0)
                                <tr>
                                    <td class="text-center w-100">
                                        Data Not Found
                                    <td>
                                <tr>
                                @else
                                    @foreach ($comments as $key => $comment)
                                <tr>
                                    <td class="comment-name" style="width:64%">
                                        <small><strong>Comment:</strong> {{ $comment->name }}</small>
                                    </td>
                                    <td>
                                        <small>
                                            <strong>Book:</strong>
                                            {{ $comment['books']['name'] }}
                                        </small>
                                    </td>
                                    <td class="comment-created-at">
                                        <small>
                                            <strong>Created:</strong>
                                            {{ $comment->created_at }}
                                        </small>
                                    </td>
                                    <td>
                                        <a  title="delete" id="delete"
                                            class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
