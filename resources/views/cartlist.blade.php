@extends('master')
@section("content")
<div class=" custom-product ">
      <div class="col-sm-4">
          <a class="btn btn-success" href="ordernow">Oder Now <span class="glyphicon glyphicon-new-window"></span></a>     
      </div>
      <br><br>
      <div class="col-sm-10  col-xs-offset-2 col-md-offset-1">
        <div class=" row trending-wrapper text-center">
            <div class="panel panel-default">
              <div class="panel-body">
                My cart List
              </div>
            </div>
            @if(session('success'))
              <div class="alert alert-success">
                 {{session('success')}}
              </div>
            @endif
  
            @foreach ($products as $item)
             <div id="prod" class="searched-item col-xs-10 col-md-3">
              <a href="detail/{{$item->id}}" class="thumbnail">
                  <img class="trending-image"  src="{{$item->gallery}}" alt="Chania">
                  <div class="text" style="text-decoration: none" >
                    <h5 class="name">By now</h5>
                    <h2>{{$item->name}}</h2>
                    <h5>{{$item->description}}</h5>
                  </div> 
                  <a href="/removecart/{{$item->card_id}}" onclick="return(confirm('voulez vous supprimer ce produit de vote panier'))" class="btn btn-success col-md-offset-1">Remove<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
              </a>          
             </div>
            @endforeach
          </div>
      </div>
</div>
@endsection

    