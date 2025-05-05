@extends('layout')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $students->name }}</h5>
                <p class="card-text">Address: {{ $students->address }}</p>
                <p class="card-text">Mobile: {{ $students->mobile }}</p>
                <a href="{{ route('students.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>

@endsection
