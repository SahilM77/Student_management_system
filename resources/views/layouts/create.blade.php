@extends('layouts.main')
@push('head')
    <title>Student Management system</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex my-5 justify-content-between align-items-center">
            <div class="h2">Create</div>
            <a href="{{ route('homes') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <label for="name" class="form-label mt-4">Name</label>
                    <input type="text" name="fname" class="form-control">
                    <div class="text-danger">
                        @error('fname')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="email" class="form-label mt-4">Email</label>
                    <input type="email" name="email" class="form-control">
                    <div class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="birth" class="form-label mt-4">Date_of_Birth</label>
                    <input type="date" name="birth" class="form-control">
                    <div class="text-danger">
                        @error('birth')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="phone" class="form-label mt-4">Phone</label>
                    <input type="text" name="phone" class="form-control">
                    <div class="text-danger">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="address" class="form-label mt-4">Address</label>
                    <input type="text" name="address" class="form-control">
                    <div class="text-danger">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit
                </form>
            </div>
        </div>
    </div>
@endsection
