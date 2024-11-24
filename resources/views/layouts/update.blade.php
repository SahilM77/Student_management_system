@extends('layouts.main')
@push('head')
    <title>Student Management system</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex my-5 justify-content-between align-items-center">
            <div class="h2">Update</div>
            <a href="{{ route('homes') }}" class="btn btn-primary">Back</a>
        </div>
        {{-- {{ print_r($errors->all()) }} --}}
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updating') }}" method="post">
                    @csrf
                    <label for="name" class="form-label mt-4">Name</label>
                    <input type="text" name="fname" class="form-control" value="{{ $students->name }}">
                    <label for="email" class="form-label mt-4">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $students->email }}">
                    <label for="birth" class="form-label mt-4">Date_of_Birth</label>
                    <input type="date" name="birth" class="form-control" value="{{ $students->Dob }}">
                    <label for="phone" class="form-label mt-4">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $students->phone }}">
                    <label for="address" class="form-label mt-4">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $students->address }}">
                    <input type="number" name="id" value="{{ $students->id }}" hidden>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
