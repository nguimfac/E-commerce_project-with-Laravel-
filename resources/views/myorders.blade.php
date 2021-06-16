@extends('master')
@section("content")
@if (Session::has('user'))
<div class=" custom-product ">
  <div class="col-sm-10  col-xs-offset-2 col-md-offset-1">
    <div class=" row trending-wrapper text-center">
        <h4><Marquee behavior="alternate" class="text-success">You can check all you orders from there </Marquee></h4>
        @foreach ($orders as $item)
         <div id="prod" class="searched-item col-xs-10 col-md-3">
          <a href="detail/{{$item->id}}" class="thumbnail">
              <img class="trending-image"  src="{{$item->gallery}}" alt="Chania">
              <div class="text" style="text-decoration:none;color:black" >

                <h5 class="name">By now</h5>
                <h2>Name :{{$item->name}}</h2>
                <h5> Delivery Statuts : {{$item->statuts}}</h5>
                <h5> Address : {{$item->address}}</h5>
                <h5>Payment Status : {{$item->payment_statuts}}</h5>
                <h5>Payment method : {{$item->payment_method}}</h5>
              </div>
          </a>
         </div>
        @endforeach
      </div>
  </div>
</div>

@else
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body text-center">
        Login you to see all the order that you are realized here ! <a href="/login" class=" btn btn-primary glyphicon glyphicon-user"></a>
     </div>
  </div>
</div>
@endif
@endsection

