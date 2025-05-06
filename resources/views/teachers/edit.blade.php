@extends('layout')
@section('content')

    <div class="container">

        <h3 align="center" class="mt-5"> Teacher Edit Page</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <a href="{{ route('teachers.index') }}" class="btn btn-secondary btn-sm">Back</a>
                <div class="form-area">
                    <form method="POST" action="{{ url('teachers/'. $teachers->id)}}">
                        {!! csrf_field() !!}
                        @method("PATCH")
                        <div class="row">
                            <div class="col-md-6">
                                <label>Teacher Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $teachers->name }}">
                            </div>
                            <div class="col-md-6">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $teachers->address }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="mobile" value="{{ $teachers->mobile }}">
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


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush
