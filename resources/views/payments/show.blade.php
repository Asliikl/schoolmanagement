@extends('layout')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4">Payment Details</h5>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Enrollment No:</strong> <span>{{ $payment->enrollment->enroll_no }}</span>
                    </div>
                    <div class="col-md-6">
                        <strong>Student Name:</strong> <span>{{ $payment->enrollment->student->name }}</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Amount Paid:</strong> <span>{{ $payment->amount }} ₺</span>
                    </div>
                    <div class="col-md-6">
                        <strong>Payment Date:</strong> <span>{{ $payment->paid_date }}</span>
                    </div>
                </div>

                <div class="text-end">
                    <a href="{{ route('payments.index') }}" class="btn btn-secondary btn-sm">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection
