@extends('layouts.guest')
@section('content')

    <div id="wrapper-admin">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo border border-danger">
                        <img src="{{ asset('images/library.png') }}" alt="">
                    </div>
                    <form class="yourform" action="{{ route('login') }}" method="post">
                        @csrf
                        <h3 class="heading">User Login</h3>
                        {{-- <h3 class="heading"><a href="{{ route('user') }}"> User Login </a></h3> --}}
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="">
                        </div>
                        <div>
                        <input type="submit" name="login" class="btn btn-dark" value="login" />
                    </form>
                    <button class="btn btn-danger float-right"><a href="/">Back</a></button>
                    @error('username')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
@endsection
