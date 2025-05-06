@extends('layout')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-area">
                    <h4 class="mb-4">Add New Batch</h4>
                    <form method="POST" action="{{ url('batches') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label>Batch Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Course Name</label>
                                <select name="course_id" class="form-control" required>
                                    <option value="" disabled selected>Choose course</option>
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Start Date</label>
                            <input type="date" class="form-control" name="start_date" required>
                        </div>
                        <div class="text-end">
                            <input type="submit" class="btn btn-primary" value="Save">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('css')
    <style>
        .form-area {
            background-color: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
@endpush
