@extends('layout')

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Batch Edit Page</h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <a href="{{ route('enrollments.index') }}" class="btn btn-secondary btn-sm">Back</a>

                <div class="form-area">
                    <form method="POST" action="{{ url('enrollments/' . $enrollment->id) }}">
                        @csrf
                        @method("PATCH")

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="enroll_no" class="form-label">Enrollment No</label>
                                <input type="text" class="form-control" id="enroll_no" name="enroll_no" value="{{ $enrollment->enroll_no }}" required>
                            </div>

                            <div class="col-md-6">
                                <label for="join_date" class="form-label">Join Date</label>
                                <input type="date" class="form-control" id="join_date" name="join_date" value="{{ $enrollment->join_date }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="student_id" class="form-label">Select Student</label>
                                <select name="student_id" class="form-select" id="student_id" required>
                                    <option value="" disabled selected>Select a student</option>
                                    @foreach($students as $student)
                                        <option value="{{ $student->id }}" {{ $student->id == $enrollment->student_id ? 'selected' : '' }}>{{ $student->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="batch_id" class="form-label">Select Batch</label>
                                <select name="batch_id" class="form-select" id="batch_id" required>
                                    <option value="" disabled selected>Select a batch</option>
                                    @foreach($batches as $batch)
                                        <option value="{{ $batch->id }}" {{ $batch->id == $enrollment->batch_id ? 'selected' : '' }}>{{ $batch->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fee" class="form-label">Fee</label>
                            <input type="number" class="form-control" id="fee" name="fee" value="{{ $enrollment->fee }}" step="0.01" required>
                        </div>

                        <div class="text-end">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

