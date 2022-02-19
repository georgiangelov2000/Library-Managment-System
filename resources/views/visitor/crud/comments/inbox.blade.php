@extends('layouts.home')
@section('title', 'Managment System - Inbox')

@section('content')
    <div class="row m-auto pt-2">
        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover table-striped dataTable" id="commentsTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Comment</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assignComments as $key => $comment)
                                <tr>
                                    <td>
                                        {{$comment->id}}
                                    </td>
                                    <td>
                                        <div class="scrollable">
                                            {{$comment->name}}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $comment->created_at }}
                                    </td>
                                    <td>

                                        {{ $comment->updated_at }}
                                    </td>
                                    <td>
                                        <a title="edit" id="edit" href={{ route('comment.edit', $comment->id) }}
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
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
