@extends('layouts.home')
@section('title', 'Managment System - Comments')

@section('content')
    <div class="row m-auto pt-2">
        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover table-striped dataTable" id="commentsUsersTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Comment</th>
                                <th>User</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $key => $comment)
                                <tr>
                                    <td>
                                        {{$comment->id}}
                                    </td>
                                    <td>
                                        <div class="scrollable">
                                         {{ $comment->name }}
                                        </div>
                                    </td>

                                    <td>
                                        {{ $comment['users']['name'] }}
                                    </td>

                                    <td class="comment-created-at">

                                        {{ $comment->created_at }}
                                    </td>

                                    <td class="comment-updated-at">

                                        {{ $comment->updated_at }}
                                    </td>

                                    <td>
                                        <a title="delete" id="delete"
                                            href="{{ route('delete.user.comment', $comment->id) }}"
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
        <script type="text/javascript" src="{{ mix('js/comments.js') }}"></script>
    @endpush
@endsection
