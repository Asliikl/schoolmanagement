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
                <a href="{{ url('/batches/create') }}" class="btn btn-success mb-3">
                    <i class="fa fa-plus-circle"></i> Add New
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center">
                        <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Batch Name</th>
                            <th>Course Name</th>
                            <th>Start Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($batches as $item => $batch)
                            <tr>
                                <td>{{ $item + 1 }}</td>
                                <td>{{ $batch->name }}</td>
                                <td>{{ $batch->course->name ?? '-' }}</td>
                                <td>{{ $batch->start_date }}</td>
                                <td>
                                    <a href="{{ route('batches.show', $batch->id) }}" class="btn btn-info btn-sm me-1" title="View student">
                                        View
                                    </a>

                                    <a href="{{ route('batches.edit', $batch->id) }}" class="btn btn-warning btn-sm me-1">
                                        <i class="fa fa-pencil-square-o"></i> Edit
                                    </a>


                                    <form action="{{ route('batches.destroy', $batch->id) }}" method="POST" class="d-inline">
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
