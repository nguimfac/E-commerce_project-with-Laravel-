@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit <span class="glyphicon glyphicon-user"></span></button><br><br>
              </form>
        </div>
    </div><br>
    <a href="/addUser" id="account" type="button" class="btn btn-default  text-info col-md-offset-5 col-xs-offset-4"><i>Create you account now <span class="glyphicon glyphicon-globe"></span></i></a>
</div>
@endsection