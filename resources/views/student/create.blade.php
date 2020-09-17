@extends('student.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Student</h2>
        </div>
        <div class="col-lg-1">
            <a href="{{ url('student') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('student.store') }}" method="POST">
    @csrf
    <div class="form-group">
            <label for="txtFirstName">First Name:</label>
            <input type="text" class="form-control" id="txtFirstName" placeholder="Enter First Name" name="txtFirstName">
        </div>
        <div class="form-group">
            <label for="txtLastName">Last Name:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName">
        </div>
        <div class="form-group">
            <label for="txtRollNo">Roll No:</label>
            <input type="text" class="form-control" id="txtRollNo" placeholder="Enter Roll Number" name="txtRollNo">
        </div>
        <div class="form-group">
            <label for="txtSubject">Subject:</label>
            <input type="text" class="form-control" id="txtSubject" placeholder="Enter Subject" name="txtSubject">
        </div>
        <div class="form-group">
            <label for="txtAddress">Address:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Address"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
   
@endsection