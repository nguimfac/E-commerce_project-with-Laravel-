@extends('master')
@section("content")
<div class=" custom-product ">
      <div class="col-sm-4">
          <a href="#">Filter</a>
      </div>
       @if(count($products)>0)
       <div class="col-sm-10 col-md-offset-2">
        <div class=" row trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($products as $item)
             <div class="searched-item col-xs-10 col-md-3">
              <a href="detail/{{$item['id']}}" class="thumbnail">
                  <img class="trending-image"  src="{{$item['gallery']}}" alt="Chania">
                  <div class="text" style="text-decoration: none" >
                    <h2>{{$item['name']}}</h2>
                    <h5>{{$item['description']}}</h5>
                  </div> 
                 <button class="btn btn-success col-md-offset-4 col-xs-offset-4">View<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
              </a>
              
             </div>
            @endforeach
          </div>
      </div>    
@else
<div class="panel panel-danger ">
  <div class="panel-body ">
    <h3 class="col-md-offset-4 text-danger">No products exits using this name <span class="glyphicon glyphicon-alert" aria-hidden="true"></h3> </span>
  </div>
</div>    
  @endif

</div>
@endsection

    