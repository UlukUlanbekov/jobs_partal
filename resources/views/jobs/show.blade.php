@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $job->title }}</h1>
        <p>{{ $job->description }}</p>


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('apply', $job->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="cover_letter">Cover Letter</label>
                <textarea class="form-control" id="cover_letter" name="cover_letter" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="resume">Resume</label>
                <input type="file" class="form-control-file" id="resume" name="resume">
            </div>
            <button type="submit" class="btn btn-primary">Apply</button>
        </form>
    </div>
@endsection
