@extends('master')
@section("content")
<div class=" custom-product ">
    <div id="myCarousel" class="container" data-ride="carousel"> 
      <div class="panel panel-default">
        <div class="panel-body text-center">
          Create or Increase your cart <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        </div>
      </div> 

      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
              <strong>{{ $message }}</strong>
      </div>
      @endif
        <div class="row">
            <div class="col-sm-7">
                <img class="detail-img" src="{{$product['gallery']}}" alt=""><p></p>
                 <div class="row">
                   <p>
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <marquee class="text-primary" behavior="" direction="">Products belong to the same category <i class="glyphicon glyphicon-tint"></i></marquee>
                      </div>
                    </div>
                      <div class="col-xs-5 col-md-3">
                        <a href="#" class="thumbnail">
                          <img src="https://icons.iconarchive.com/icons/michael/nike/256/Nike-Shirt-17-icon.png" alt="...">
                        </a>
                      </div>
                      ...
                   </p>
                 </div>
            </div>

            <div class="col-md-4 col-ms-offset-2">
                 <a href="/" > <span class="badge bg-primary"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> back</span>  </a>
                 <h2>{{$product['name']}} </h2>
                 <h3>Price: {{$product['price']}} fcfa</h3>
                 <h4>detail: {{$product['description']}} </h4>
                 <h4>category: {{$product['category']}}</h4>
                 
                 <br>
                 <form action="/add_to_card" method="POST">
                    @csrf
                     <input type="hidden" class="" name="product_id" value="{{$product['id']}}" id="">
                     <button id="btn" class="btn btn-primary">Add to Card <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
                 </form>
                  <br>
                 <a href="https://api.whatsapp.com/send?phone=+237680478493&text=bonjour Monsieur&source=&data=" class="btn btn-success">Whatsapp Mes <i  class="fa fa-whatsapp" aria-hidden="true"></i></a>
<br><br>
                 <div class="row">
                  <div class="col-lg-12">
                    <div class=" panel panel-default ">
                      <div class="panel-body">
                     @if (Session::has('user'))
                     <form action="/add_comment" method="POST">
                      @csrf
                      <div class="input-group">
                        <input type="text" name="comments" class="form-control" placeholder="Add comment...">
                        <span class="input-group-btn">
                          <input type="hidden" class="" name="product_id" value="{{$product['id']}}" id="">
                          <button id="btn" class="btn btn-primary"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></button>
                        </span>
                      </div>  
                    </form> 
                      @else
                        <div class=" bg-primary">You must be connected before send message</div> 
                     @endif
<br>
                        <h5 > Comments <span class="badge">{{count($comment)}}</span> </h5>
                        @foreach ($comment as $item)
                        <span> <i class="glyphicon glyphicon-user"></i>  <span class="mr-1">{{$item->name}}</span> </span>
                        <p> {{$item->contains}} <span class="text-primary"></span></p>
                   @endforeach
                      </div>
                    </div>

                    <!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <br>
               
                 <br><br>
                 
            </div>
        </div>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    toastr.options.timeOut = 2000; // 2s
    $('#btn').click(function() {
       toastr.success('Add to cart successful');
    });
  });
  </script>
        
</div>
@endsection

