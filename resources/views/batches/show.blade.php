@extends('layout')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $batches->name }}</h5>
                <p class="card-text">Address: {{ $batches->course_id }}</p>
                <p class="card-text">Mobile: {{ $batches->start_date }}</p>
                <a href="{{ route('batches.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>

@endsection
