@extends("mainpage")
@section("title") Create Newstudent @endsection
@section("content")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 text-right">
            <a href="{{route('newindex')}}" class="btn btn-danger"> Back to home </a>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <form action="{{route('store1')}}" method="POST">
                @csrf
                <div class="card shadow">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">× </button>
                            {{Session::get('success')}}
                        </div>
                    @elseif(Session::has('failed'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">× </button>
                            {{Session::get('failed')}}
                        </div>
                    @endif

                    <div class="card-header">
                        <h4 class="card-title"> Create Article </h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name"> Student name </label>
                            <textarea class="form-control" name="name" id="name">{{old('name')}}</textarea>
                            {!!$errors->first("name", "<span class='text-danger'>:message </span>") !!}
                        </div>

                        <div class="form-group">
                            <label for="email"> Email </label>
                            <textarea class="form-control" name="email" id="email">{{old('email')}}</textarea>
                            {!!$errors->first("email", "<span class='text-danger'>:message </span>") !!}
                        </div>

                        <div class="form-group">
                            <label for="subject"> Subject </label>
                            <textarea class="form-control" name="subject" id="subject">{{old('subject')}}</textarea>
                            {!!$errors->first("subject", "<span class='text-danger'>:message </span>") !!}
                        </div>

                        <div class="form-group">
                            <label for="gender"> Student gender </label>
                            <textarea class="form-control" name="gender" id="gender">{{old('gender')}}</textarea>
                            {!!$errors->first("gender", "<span class='text-danger'>:message </span>") !!}
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"> Save </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection