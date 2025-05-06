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
                <a href="{{ url('/enrollments/create') }}" class="btn btn-success mb-3">
                    <i class="fa fa-plus-circle"></i> Add New
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center">
                        <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Enrollment No</th>
                            <th>Student Name</th>
                            <th>Batch Name</th>
                            <th>Join Date</th>
                            <th>Fee</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($enrollments as $item => $enrollment)
                            <tr>
                                <td>{{ $item + 1 }}</td>
                                <td>{{ $enrollment->enroll_no }}</td>
                                <td>{{ $enrollment->student->name ?? '-' }}</td>
                                <td>{{ $enrollment->batch->name }}</td>
                                <td>{{ $enrollment->join_date }}</td>
                                <td>{{ $enrollment->fee }}</td>

                                <td>
                                    <a href="{{ route('enrollments.show', $enrollment->id) }}" class="btn btn-info btn-sm me-1" title="View student">
                                        View
                                    </a>

                                    <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-warning btn-sm me-1">
                                        <i class="fa fa-pencil-square-o"></i> Edit
                                    </a>


                                    <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" class="d-inline">
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
