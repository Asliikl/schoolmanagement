@extends('layout')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $courses->name }}</h5>
                <p class="card-text">Address: {{ $courses->syllabus }}</p>
                <p class="card-text">Mobile: {{ $courses->duration }}</p>
                <a href="{{ route('teachers.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>

@endsection
