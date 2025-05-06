@extends('layout')

@section('content')
    <div class="container">
        <h3 class="text-center mt-5">Edit Payment</h3>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="{{ route('payments.index') }}" class="btn btn-secondary btn-sm mb-3">Back</a>

                <div class="card p-4">
                    <form method="POST" action="{{ url('payments/' . $payment->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="enrollment_id" class="form-label">Select Enrollment</label>
                                <select name="enrollment_id" class="form-select" id="enrollment_id" required>
                                    <option value="" disabled selected>Select an enrollment</option>
                                    @foreach($enrollments as $enrollment)
                                        <option value="{{ $enrollment->id }}" {{ $enrollment->id == $payment->enrollment_id ? 'selected' : '' }}>
                                            {{ $enrollment->enroll_no }} - {{ $enrollment->student->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="paid_date" class="form-label">Payment Date</label>
                                <input type="date" class="form-control" id="paid_date" name="paid_date" value="{{ $payment->paid_date }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount" name="amount" value="{{ $payment->amount }}" step="0.01" required>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Update Payment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
