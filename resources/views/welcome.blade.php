@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome</div>
                    <div class="card-body">
                        <h1>Welcome to My Website</h1>
                        @guest <!-- Show login/register links if user is not logged in -->
                        <p>You can <a href="{{ route('login') }}">login</a> or <a href="{{ route('register') }}">register</a> to continue.</p>
                        @else <!-- Show jobs list link if user is logged in -->
                        <p>You are logged in. <a href="{{ route('jobs.index') }}">View Jobs List</a></p>
                        <p><a href="{{ route('logout') }}">logout</a></p>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection