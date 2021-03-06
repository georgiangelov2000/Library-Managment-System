@extends('layouts.home')
@section('title', 'Managment System - Genders')


@section('content')
    <div class="row m-auto pt-2">
        <x-header-page message="" routeLink="delete.genders" buttonID="delete" button="Delete All Records" heading="Genders" />
        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover table-striped dataTable" id="genders">
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
                            @foreach ($allData as $key => $gender)
                                <tr>
                                    <td>{{ $gender->id }}</td>
                                    @if ($gender->name === 'm')
                                        <td class="">
                                            <i class="fa fa-mars text-primary"></i>
                                        </td>
                                    @elseif($gender->name === 'f')
                                        <td class="">
                                            <i class="fa fa-mercury text-danger"></i>
                                        </td>
                                    @endif
                                    <td>{{ $gender->created_at }}</td>
                                    <td>{{ $gender->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('gender.edit', $gender->id) }}" title="edit" id="edit"
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('gender.delete', $gender->id) }}" title="delete" id="delete"
                                            class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                                        <a title="Assigned-users" href="{{ route('assigned.users', $gender->id) }}"
                                            id="assigned Users" class="btn btn-sm btn-warning">
                                            <i class="far fa-users"></i>
                                        </a>
                                        <a title="Assigned-authors" href="{{ route('assigned.authors', $gender->id) }}"
                                            id="Assigned Authors" class="btn btn-sm btn-warning">
                                            <i class="far fa-users"></i>
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
        <script type="text/javascript" src="{{ mix('js/genders.js') }}"></script>
    @endpush
@stop
