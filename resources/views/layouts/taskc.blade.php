@extends('layouts.main')
@push('head')
    <title>Student Management system</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex my-5 justify-content-between align-items-center">
            <div class="h2">Create</div>
            <a href="{{ route('taks1') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('storings') }}" method="post">
                    @csrf
                    <label for="students-id" class="form-label mt-4">Student-id</label>
                    <input type="text" name="studid" class="form-control">
                    <div class="text-danger">
                        @error('studid')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="teacher-id" class="form-label mt-4">Teacher-id</label>
                    <input type="text" name="teacherid" class="form-control">
                    <div class="text-danger">
                        @error('teacherid')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="title" class="form-label mt-4">Title</label>
                    <input type="text" name="title" class="form-control">
                    <div class="text-danger">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="description" class="form-label mt-4">Description</label>
                    <input type="text" name="description" class="form-control">
                    <div class="text-danger">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="due-date" class="form-label mt-4">Due Date</label>
                    <input type="date" name="dued" class="form-control">
                    <div class="text-danger">
                        @error('dued')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="status" class="form-label mt-4">Status</label>
                    <select name="status" class="form-control">
                        <option value="Pending">Pending</option>
                        <option value="Completed">Completed</option>
                    </select>
                    <div class="text-danger">
                        @error('status')
                            {{ $message }}
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit
                </form>
            </div>
        </div>
    </div>
@endsection
