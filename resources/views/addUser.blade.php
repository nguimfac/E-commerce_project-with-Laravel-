@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="addUser" method="POST">
              @csrf
              <div class="form-group">
                <label for="Username">UserName</label>
                <input type="text" name="name" required class="form-control" id="exampleInputEmail1" placeholder="UserName">
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password"  required class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit <span class="glyphicon glyphicon-globe"></span></button><br><br>
              </form>
        </div>
    </div><br>
</div>
@endsection