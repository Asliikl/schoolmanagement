@extends('layout')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4">Enrollment Details</h5>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Enrollment No:</strong> <span>{{ $enrollment->enroll_no }}</span>
                    </div>
                    <div class="col-md-6">
                        <strong>Student:</strong> <span>{{ $enrollment->student->name }}</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Batch:</strong> <span>{{ $enrollment->batch->name }}</span>
                    </div>
                    <div class="col-md-6">
                        <strong>Join Date:</strong> <span>{{ $enrollment->join_date }}</span>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <strong>Fee:</strong> <span>{{ $enrollment->fee }}</span>
                    </div>
                </div>

                <div class="text-end">
                    <a href="{{ route('enrollments.index') }}" class="btn btn-secondary btn-sm">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection
