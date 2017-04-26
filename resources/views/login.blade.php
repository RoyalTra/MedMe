@extends('layout/_layout')
@section('content')

<div  style="width:600px; padding-top:100px;" class="container">
    <div class="panel panel-default ">
        <div class="panel-heading text-center"> <h1>MedMe Login</h1></div>
        <div class="panel-body">
        <form>
            <div class="form-group form-inline row">
                <label for="UserName">Username </label>
                <input type="text" id="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group form-inline row">
                <label for="Password">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Enter Password">
            </div>
            <p><a href="#">Forgot Password?</a></p>
            <div class="row">
                <button type="submit" class="btn btn-default">Sign In</button>
                <a href="createprofile"><button type="button" class="btn btn-default">Create Profile</button></a>
            </div>
        </form>
        
        </div>
    </div>
</div>
@stop