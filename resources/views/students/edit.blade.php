@extends('layout')
@section('content')

    <div class="container">

        <h3 align="center" class="mt-5"> Student Edit Page</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <a href="{{ route('students.index') }}" class="btn btn-secondary btn-sm">Back</a>
                <div class="form-area">
                    <form method="POST" action="{{ url('students/'. $students->id)}}">
                        {!! csrf_field() !!}
                        @method("PATCH")
                        <div class="row">
                            <div class="col-md-6">
                                <label>Student Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $students->name }}">
                            </div>
                            <div class="col-md-6">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $students->address }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="mobile" value="{{ $students->mobile }}">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


