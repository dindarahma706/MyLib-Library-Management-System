@extends('layouts.guest')
@section('content')
    <div id="wrapper-admin">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo border border-danger">
                        <img src="{{ asset('images/library.png') }}" alt="">
                    </div>
                        <div class="yourform">
                            <h3 class="heading">Welcome to MYLIB</h3>
                            <br>
                            <div>
                            <br>
                                <button class="btn btn-dark float-center"><a href="/loginadmin">Login As <br> Admin</a></button>
                                <button class="btn btn-dark float-right"><a href="/loginuser">Login As <br> User</a></button>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
