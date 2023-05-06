@extends("mainpage")
@section("title") View Student @endsection
@section("content")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="row">
    <div class="col-xl-12">
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">Student Details</h3>
                <div class="card-text">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>ID:</strong></td>
                                <td>{{ $student->id }}</td>
                            </tr>
                            <tr>
                                <td><strong>Name:</strong></td>
                                <td>{{ $student->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>{{ $student->email }}</td>
                            </tr>
                            <tr>
                                <td><strong>Subject:</strong></td>
                                <td>{{ $student->subject }}</td>
                            </tr>
                            <tr>
                                <td><strong>Gender:</strong></td>
                                <td>{{ $student->gender }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection