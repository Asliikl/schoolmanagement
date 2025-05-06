@extends('layout')
@section('content')

    <div class="container">

        @if(session('flash_message'))
            <div class="alert alert-success">
                {{ session('flash_message') }}
            </div>
        @endif

        <div class="row mt-4">
            <div class="col-md-12">
                <a href="{{ url('/courses/create') }}" class="btn btn-success mb-3">
                    <i class="fa fa-plus-circle"></i> Add New
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center">
                        <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Course Name</th>
                            <th>Syllabus</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($courses as $item => $course)
                            <tr>
                                <td>{{ $item + 1 }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->syllabus }}</td>
                                <td>{{ $course->duration }}</td>
                                <td>
                                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm me-1" title="View student">
                                        View
                                    </a>

                                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm me-1">
                                        <i class="fa fa-pencil-square-o"></i> Edit
                                    </a>


                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
