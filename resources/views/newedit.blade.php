@extends("mainpage")	 
@section("content")
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <h2>Edit Student Information</h2>
    <form action="{{ route('update1', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}">
        </div>

        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" id="subject" name="subject" value="{{ $student->subject }}">
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('newindex') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
@stop