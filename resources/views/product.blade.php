@extends('master')
@section("content")
<br><br>
<div class=" custom-product top">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
         @foreach ($products as $item)
         <div class="item {{$item['id']==1?'active':''}}">
           <a href="detail/{{$item['id']}}">
                <img class="slider-img image-responsive" src="{{$item['gallery']}}" alt="Chania">
                <div class="carousel-caption" style="background: #35443585">
                <h3>{{$item['name']}}</h3>
                <p>{{$item['description']}}</p>
                </div>
           </a>
          </div>
          @endforeach

        <div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://icons.iconarchive.com/icons/nendomatt/apple-louvre/512/Apple-Store-Tshirt-Red-icon.png" alt="Los Angeles" >
        <div class="carousel-caption" style="background: #35443585">
          Good phone Iphobe 6+ with big characteristic to you
          </div>
      </div>

      <div class="item">
        <img src="https://icons.iconarchive.com/icons/archigraphs/mac/512/iPhone-icon.png" alt="Chicago"">
        <div class="carousel-caption" style="background: #35443585">
          Good phone Iphobe 6+ with big characteristic to you
          </div>
      </div>

      <div class="item">
        <img src="https://icons.iconarchive.com/icons/musett/iphone-4/512/iPhone-White-W2-icon.png" alt="New york">
        <div class="carousel-caption" style="background: #35443585">
          Good phone Iphobe 6+ with big characteristic to you
          </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

</div>


        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>



      <div class="d-lg-none d-md-block" style="display: flex;flex-wrap:wrap ">

            <div class="list-group"  id="fadeshow1">

        <div class="sidebar-wrapper" style="margin-top:80px">
					<nav>
						<ul class="nolist hidden-sm hidden-xs">
							<li><a href="https://www.solodev.com/blog/" style="border-radius: 15px;color:white" class="text-white bg-primary" >Category</a></li>
							<li><a href="https://www.solodev.com/product/create.stml">Computer <i class="fa fa-laptop"></i></a></li>
							<li><a href="https://www.solodev.com/product/host.stml">Television <i class="fa fa-tv"></i></a></li>
							<li><a href="https://www.solodev.com/product/engage.stml">Choes <i class="fa shoe-prints"></i></a></li>
							<li><a href="https://www.solodev.com/product/support.stml">Fridge <i class="fal fa-tshirt"></i></a></li>
						</ul>
					</nav>
				</div>
            </div>
            <style>
              @media (max-width: 1026px) {
                #fadeshow1 { display: none; }

            }    </style>
      <div class="container transparent">
        <h3 class=text-center>Trending Products</h3>
        @foreach ($products as $item)
        <div class="col-xs-5 col-xs-offset-1 col-md-3 ">
          <a href="detail/{{$item['id']}}" class="thumbnail">
            <img  class="trending-image"  src="{{$item['gallery']}}" alt="Chania"><hr>
         <!---   <img width="30%" class="img-circle" src="/image/{{$item['gallery']}}"><hr<--->
            <div class="text" style="text-decoration: none" >
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">{{$item['name']}}</h3>
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">{{$item['price']}}$</h3>
                <h6 class="text-center float-col-md-offset-5" style="font-family: 'Times New Roman', Times, serif;color:black">{{$item->created_at->diffForHumans() }}</h6>

              </div>
          </a>

        </div>
        @endforeach
      </div>
      </div>
    <div class="float-right"> {{$products->links()}}</div>
</div>

<style>
  .transparent{
 background-color: #ffffff;

}
</style>



@endsection
