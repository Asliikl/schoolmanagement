@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="mb-4">Add New Enrollment</h4>
                        <form method="POST" action="{{ url('enrollments') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="enroll_no" class="form-label">Enrollment No</label>
                                    <input type="text" class="form-control" id="enroll_no" name="enroll_no" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="join_date" class="form-label">Join Date</label>
                                    <input type="date" class="form-control" id="join_date" name="join_date" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="student_id" class="form-label">Select Student</label>
                                    <select name="student_id" class="form-select" id="student_id" required>
                                        <option value="" disabled selected>Select a student</option>
                                        @foreach($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="batch_id" class="form-label">Select Batch</label>
                                    <select name="batch_id" class="form-select" id="batch_id" required>
                                        <option value="" disabled selected>Select a batch</option>
                                        @foreach($batches as $batch)
                                            <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="fee" class="form-label">Fee</label>
                                <input type="number" class="form-control" id="fee" name="fee" step="0.01" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Save Enrollment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
