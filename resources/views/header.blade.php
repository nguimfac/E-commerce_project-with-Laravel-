

<?php
 use App\Http\Controllers\ProductController;
 $total=0;
 if(Session::has('user')){  //pour verifier si l'utilisateur est connecte
 // pour recupere son id;
  $total = ProductController::cartItem();
 }

?>

<div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color: white">E-COM</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Home </a></li>
              <li class=""><a href="/myorders">Orders</a></li>
            </ul>
            <form action="/search"  class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" name="query" required class="form-control search-box" style="width: 500px" placeholder="Search products...">
              </div>
              <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-search"></span></button>
            </form>
            <ul class="nav navbar-nav navbar-right active" >
                 @if(Session::has('user'))
                 {
                   <li><a class="active" href="/cartlist"><span class="glyphicon glyphicon-shopping-cart"></span> Card ({{$total}}) </a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                      <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="/logout">Logout <span class="glyphicon glyphicon-remove"></a></li>

                    </ul>
                  </li>
                 }
                 @else
                 <li><a class="active" id="login" href="/login"><span class="glyphicon glyphicon-user"></span> Login </a></li>

                 @endif

            </ul>
          </div><!-- /.navbar-collapse -->
        </div>

        <style>
          #login{
        animation:blink 2s linear infinite ;
        color: #fff;
    }
    @keyframes blink {
        0%{opacity: 0;}
        50%{opacity: .5;}
        100%{opacity: 1;}
    }
        </style>

        <!-- /.container-fluid -->
      </nav>
</div>

