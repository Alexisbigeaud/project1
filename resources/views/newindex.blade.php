@extends("mainpage")	 
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>New Students</h4> 
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('newcreate') }}"> Create New student</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Gender</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->subject }}</td>
                                <td>{{ ucfirst($student->gender) }}</td>
                                <td>
                                    <form action="{{ route('destroy1', $student->id) }}" method="POST">
                                        <a href="{{route('newshow', $student->id)}}" class="btn btn-sm btn-info"> View </a>
                                        <a class="btn btn-primary" href="{{ route('newedit',$student->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@stop