@extends('layout')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $teachers->name }}</h5>
                <p class="card-text">Address: {{ $teachers->address }}</p>
                <p class="card-text">Mobile: {{ $teachers->mobile }}</p>
                <a href="{{ route('teachers.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>

@endsection
