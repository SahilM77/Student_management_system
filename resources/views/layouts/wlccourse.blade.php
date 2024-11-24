@extends('layouts.main')
@push('head')
    <title>Student Management system</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex my-5 justify-content-between align-items-center">
            <div class="h2">All course Details</div>
            <a href="{{ route('courses') }}" class="btn btn-primary">Add Button</a>
        </div>
        <table class="table table-stripped table-dark">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>duration</th>
                <th>Action</th>
            </tr>
            @foreach ($courss as $cors)
                <tr valign="middle">
                    <td>{{ $cors->name }}</td>
                    <td>{{ $cors->description }}</td>
                    <td>{{ $cors->duration }}</td>
                    <td>
                        <a href="{{ route('cedits', $cors->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('deletes1', $cors->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
