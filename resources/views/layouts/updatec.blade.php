@extends('layouts.main')
@push('head')
    <title>Student Management system</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex my-5 justify-content-between align-items-center">
            <div class="h2">Create</div>
            <a href="{{ route('course1') }}" class="btn btn-primary">Back</a>
        </div>
        {{-- {{ print_r($errors->all()) }} --}}
        <div class="card">
            <div class="card-body">
                <form action="{{ route('cupdating') }}" method="post">
                    @csrf
                    <label for="name" class="form-label mt-4">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $core->name }}">
                    <div class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" value="{{ $core->description }}">
                    <div class="text-danger">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="durig">Duration</label>
                    <input type="number" name="duration" class="form-control" value="{{ $core->duration }}">
                    <div class="text-danger">
                        @error('duration')
                            {{ $message }}
                        @enderror
                    </div>
                    <input type="number" name="id" value="{{ $core->id }}" hidden>
                    <button type="submit" class="btn btn-primary mt-3">Submit
                </form>
            </div>
        </div>
    </div>
@endsection
