@extends('student.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-11">
        <h1>Laravl 7 Crud</h1>
    </div>
    <div class="col-lg-1">
        <a href="{{ url('student') }}" class="btn btn-primary">Back</a>
    </div>
</div>
<table class="table table-bordered">
    <tr>
        <th>First Name:</th>
        <td>{{ $student->first_name }}</td>
    </tr>
    <tr>
        <th>Last Name:</th>
        <td>{{ $student->last_name }}</td>
    </tr>
    <tr>
        <th>Roll No.</th>
        <td>{{ $student->roll_no }} </td>
    </tr>
    <tr>
        <th>Subject:</th>
        <td>{{ $student->subject }}</td>
    </tr>
    <tr>
        <th>Address:</th>
        <td> {{ $student->address }} </td>
    </tr>
</table>
@endsection
