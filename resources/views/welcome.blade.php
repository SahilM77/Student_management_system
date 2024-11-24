@extends('layouts.main')
@push('head')
    <title>Student Management system</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex my-5 justify-content-between align-items-center">
            <div class="h2">All Students Details</div>
            <a href="{{ route('creates') }}" class="btn btn-primary">Add Button</a>
        </div>
        <table class="table table-stripped table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date-of-birth</th>
                <th> Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            @foreach ($students as $studss)
                <tr valign="middle">
                    <td>{{ $studss->name }}</td>
                    <td>{{ $studss->email }}</td>
                    <td>{{ $studss->Dob }}</td>
                    <td>{{ $studss->phone }}</td>
                    <td>{{ $studss->address }}</td>
                    <td>
                        <a href="{{ route('edts', $studss->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('deletes', $studss->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
