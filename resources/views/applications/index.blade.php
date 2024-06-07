@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your Applications</h1>
        <div class="row">
            @foreach($applications as $application)
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Job: {{ $application->position->title }}</h5>
                            <p class="card-text">Cover Letter: {{ $application->cover_letter }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
