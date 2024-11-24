@extends('layouts.main')
@push('head')
    <title>Student Management system</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex my-5 justify-content-between align-items-center">
            <div class="h2">All course Details</div>
            <a href="{{ route('tasked') }}" class="btn btn-primary">Add Button</a>
        </div>
        <table class="table table-stripped table-dark">
            <tr>
                <th>student_id</th>
                <th>teacher_id</th>
                <th>title</th>
                <th>description</th>
                <th>due-date</th>
                <th>status</th>
            </tr>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->student_id }}</td>
                    <td>{{ $task->teacher_id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>{{ $task->status }}</td>
                    <td>
                        <a href="{{ route('tasked.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endsection
    </table>
</div>
