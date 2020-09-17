@extends('student.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h1>Update Student</h1>
        </div>
        <div class="col-lg-1">
            <a href="{{ url('student') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!!</strong> There were some problems with inputs <br><br>
            <ul>
                @foreach ($errors as $error)
                    {{ $error }}
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('student.update',$student->id) }}" method="post">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtFirstName">First Name</label>
            <input type="text" name="txtFirstName" id="txtFirstName" value="{{ $student->first_name }}" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label for="txtLastName">Last Name</label>
            <input type="text" name="txtLastName" id="txtLastName" value="{{ $student->last_name }}">
        </div>
        <div class="form-group">
            <label for="txtRollNo">Roll No.</label>
            <input type="text" name="txtRollNo" id="txtRollNo" value="{{ $student->roll_no }}" placeholder="Enter Roll No.">
        </div>
        <div class="form-group">
            <label for="txtSubject">Subject</label>
            <input type="text" name="txtSubject" id="txtSubject" value="{{ $student->subject }}" placeholder="Enter Subject">
        </div>
        <div class="form-group">
            <label for="txtAddress">Address</label>
            <input type="text" name="txtAddress" id="txtAddress" value="{{ $student->address}}" placeholder="Enter Address">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection