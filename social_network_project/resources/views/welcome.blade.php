
@extends('layouts.master')

@section('title')
    Social Network - Developed by Pheakdey Luk
@endsection

@section('content')
    {{-- @include('includes.message-block') --}}
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="/signup" method="post">
                <div class="form-group">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="">
                </div>
                <div class="form-group ">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="">
                </div>
                <div class="form-group">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }} ">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="/signin" method="post">
                <div class="form-group ">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="">
                </div>
                <div class="form-group">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection
