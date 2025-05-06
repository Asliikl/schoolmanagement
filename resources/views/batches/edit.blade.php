@extends('layout')

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Batch Edit Page</h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <a href="{{ route('batches.index') }}" class="btn btn-secondary btn-sm">Back</a>

                <div class="form-area">
                    <form method="POST" action="{{ url('batches/' . $batch->id) }}">
                        @csrf
                        @method("PATCH")

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label>Batch Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $batch->name }}" required>
                            </div>
                            <div class="col-md-6">
                                <label>Course Name</label>
                                <select name="course_id" class="form-control" required>
                                    <option value="">-- Select Course --</option>
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}" {{ $batch->course_id == $course->id ? 'selected' : '' }}>
                                            {{ $course->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Start Date</label>
                            <input type="date" class="form-control" name="start_date" value="{{ $batch->start_date }}" required>
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

@push('css')
    <style>
        .form-area {
            padding: 20px;
            margin-top: 20px;
            background-color: #b3e5fc;
        }

        .bi-trash-fill {
            color: red;
            font-size: 18px;
        }

        .bi-pencil {
            color: green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush
