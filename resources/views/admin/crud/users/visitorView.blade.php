@extends('admin.home')
@section('title', 'Managment System - Visitors')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div>
            <div class="card">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover" id="user-roles">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Genders</th>
                                <th>Date of birth</th>
                                <th>Last Seen</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    @if ($value->gender_id === 1)
                                        <td class="">
                                            <i style="font-size:2rem" class="ml-4 fas fa-male text-primary"></i>
                                        </td>
                                    @elseif($value->gender_id === 2)
                                        <td class="">
                                            <i style="font-size:2rem" class="ml-4 fas fa-female text-danger"></i>
                                        </td>
                                    @else
                                        <td>
                                        </td>
                                    @endif
                                    <td>{{ $value->dob }}</td>
                                    <td>
                                        {{ Carbon\Carbon::parse($value->last_seen)->diffForHumans() }}
                                    </td>
                                    <td>
                                        @if (Cache::has('user-is-online-' . $value->id))
                                            <span class="text-success">Online</span>
                                        @else
                                            <span class="text-danger">Offline</span>
                                        @endif
                                    </td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td>
                                        <a id="assigned-books" href="{{ route('user.assigned.book', $value->id) }}"
                                            title="Assigned Books" class="btn btn-sm btn-warning"><i class="fa fa-book"
                                                aria-hidden="true"></i>
                                            </i>
                                        </a>
                                        <a href="{{ route('comment.show.user', $value->id) }}" id="view-comment"
                                            class="btn btn-sm btn-dark" title="View comments">
                                            <i class="fas fa-comments"></i>
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
        <script type="text/javascript" src="{{ mix('js/user-roles.js') }}"></script>
    @endpush
@stop
