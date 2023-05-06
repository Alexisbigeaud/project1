@extends('mainpage')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mb-3">
                        <p>{{ $post->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small>Posted {{ $post->created_at->diffForHumans() }}</small>
                            <div class="btn-group">
                                <a href="{{ route('index2') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection