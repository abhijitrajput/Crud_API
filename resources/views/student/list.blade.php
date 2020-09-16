@extends('student.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h1>Laravel 7 CRUD EXAMPLE</h1>
        </div>
        <div class="col-lg-1">
            <a href="{{ route('student.create') }}" class="btn btn-success">Add</a>
        </div>
    </div>
    @if ($message == Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Roll No.</th>
            <th>Subject</th>
            <th>Address</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($students as $student)
            <tr>
                <td>{{ ++i; }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->roll_no }}</td>
                <td>{{ $student->subject }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <form action=" {{ route('student.destroy',$student->id) }}" method="POST">
                        <a href="{{ route('student.show',$student->id)}}" class="btn btn-info"> Show</a>
                        <a href="{{ route('student.edit',$student->id)}}" class="btn btn-info"> Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>            
        @endforeach
    </table>
@endsection
