<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com Project</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
<!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  {{View::make('header')}}
  @yield("content")
  {{View::make('footer')}}

  <style>


.nolist {
    list-style: none;
}
.sidebar-wrapper {
	max-width: 295px;
	margin-bottom: 50px
}
@media (max-width:991px) {
	.sidebar-wrapper {
		width: 100%;
		max-width: 992px;
		margin-bottom: 0
	}
}
{
    top{
        margin-top:25px;
    }
}
.sidebar-wrapper>ul li {
	font-size: 1.8rem;
	font-weight: 500
}
.sidebar-wrapper>ul>li {
	border-top: 1px solid #e9e7e7;
	font-weight: 500
}
.sidebar-wrapper nav>ul {
	font-family: Montserrat, sans-serif;
	margin-bottom: 0
}
.sidebar-wrapper nav>ul li {
	font-size: 1.8rem;
	font-weight: 500
}
.sidebar-wrapper nav>ul>li {
	border-top: 1px solid #e9e7e7;
	font-weight: 500
}
.sidebar-wrapper nav>ul>li:first-child {
	border: 0
}
.sidebar-wrapper nav>ul>li>a {
	color: #1f1a17;
	display: block;
	padding: 20px 20px
}
.sidebar-wrapper nav>ul>li>a:hover {
	color: #fff;
  background: #80bcdf;
   text-decoration: underline
}

select#sub-menu {
    width: 100%;
    height: 55px;
    color: #000;
    margin: 15px 0;
    padding: 13px;
    border: 1px solid #333;
    -webkit-appearance: none;
    appearance: none;
    -moz-appearance: none;
    text-overflow: '';
    background: url(https://raw.githubusercontent.com/solodev/mobile-sidebar-navigation/master/drop-arrow.png) right no-repeat;
}
select#sub-menu, select#sub-menu>option {
    font-family: Helvetica,Helvetica,Arial,sans-serif;
    font-size: 1.8rem;
    line-height: 28px;
}
select#sub-menu, select#sub-menu>option {
    font-family: Helvetica,Helvetica,Arial,sans-serif;
    font-size: 1.8rem;
    line-height: 28px;

@media (max-width: 768px){.navbar-fixed-side{margin-left:-15px;margin-right:-15px}}@media (min-width: 768px){.navbar-fixed-side{position:fixed;margin:0 -15px;height:100vh;width:inherit;overflow:auto;border-top-width:0;border-bottom-width:0;border-radius:0}.navbar-fixed-side .container,.navbar-fixed-side .container-fluid{width:auto;padding-left:0;padding-right:0}.navbar-fixed-side .navbar-header{float:none}.navbar-fixed-side .navbar-brand{height:auto}.navbar-fixed-side>.container .navbar-brand,.navbar-fixed-side>.container-fluid .navbar-brand{margin-left:0}.navbar-fixed-side .navbar-collapse{width:100%;border-top:1px solid #e7e7e7}.navbar-fixed-side .navbar-nav{float:none;margin:0 -15px}.navbar-fixed-side .navbar-nav>li{float:none}.navbar-fixed-side .navbar-nav>li>a{padding-top:10px;padding-bottom:10px;border-bottom:1px solid #e7e7e7}.navbar-fixed-side .navbar-form{margin:0;margin-left:-15px;margin-right:-15px;padding:10px 15px;border-bottom:1px solid #e7e7e7}.navbar-fixed-side .navbar-text{float:none;margin-left:0;margin-right:0}.navbar-fixed-side .navbar-left,.navbar-fixed-side .navbar-right{float:none !important}.navbar-fixed-side .navbar-nav .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;box-shadow:none;border-bottom:1px solid #e7e7e7}.navbar-fixed-side .navbar-nav .dropdown-menu>li>a,.navbar-fixed-side .navbar-nav .dropdown-menu .dropdown-header{padding:5px 15px 5px 25px}.navbar-fixed-side .navbar-nav .dropdown-menu>li>a{line-height:20px;color:#777}.navbar-fixed-side .navbar-nav .dropdown-menu>li>a:hover,.navbar-fixed-side .navbar-nav .dropdown-menu>li>a:focus{background-image:none}.navbar-fixed-side .navbar-nav .dropdown-menu>.active>a{background-color:#e7e7e7;color:#555}.navbar-fixed-side .navbar-nav>li>a:hover,.navbar-fixed-side .navbar-nav>li>a:focus,.navbar-fixed-side .navbar-nav .dropdown-menu>li>a:hover,.navbar-fixed-side .navbar-nav .dropdown-menu>li>a:focus{background-color:#f0f0f0;color:#333}.navbar-fixed-side .dropdown>.dropdown-toggle,.navbar-fixed-side .dropdown-menu>.dropdown-header{background-color:transparent !important;color:#9d9d9d !important;cursor:default;font-size:0.8em;text-transform:uppercase;border-bottom:none;padding-bottom:0}.navbar-fixed-side .dropdown-toggle .caret{display:none}.navbar-fixed-side .dropdown-menu{display:block}.navbar-fixed-side.navbar-inverse .navbar-collapse,.navbar-fixed-side.navbar-inverse .navbar-nav>li>a,.navbar-fixed-side.navbar-inverse .navbar-form,.navbar-fixed-side.navbar-inverse .navbar-nav .dropdown-menu{border-color:#363636}.navbar-fixed-side.navbar-inverse .divider{background-color:#363636}.navbar-fixed-side.navbar-inverse .navbar-nav .dropdown-menu>li>a{color:#9d9d9d}.navbar-fixed-side.navbar-inverse .navbar-nav .dropdown-menu>.active>a{background-color:#090909;color:#fff}.navbar-fixed-side.navbar-inverse .navbar-nav>li:not(.active)>a:hover,.navbar-fixed-side.navbar-inverse .navbar-nav>li:not(.active)>a:focus,.navbar-fixed-side.navbar-inverse .navbar-nav .dropdown-menu>li:not(.active)>a:hover,.navbar-fixed-side.navbar-inverse .navbar-nav .dropdown-menu>li:not(.active)>a:focus{background-color:#2f2f2f;color:#fff}.navbar-fixed-side.navbar-inverse .dropdown>.dropdown-toggle{color:#777777 !important}}


      .custom-login{
          height: 500px;
          padding-top: 100px;

      }
      img.slider-img{
          height: 600px;
      }
      .detail-img{
          height: 400px;
      }
      .custom-product{
          height: 600px;
      }
      img:hover
      {
        opacity: 1;
		transform: scale(1.15,1.15);
		-webkit-transform:scale(1.15,1.15);
		-moz-transform:scale(1.15,1.15);
		-ms-transform:scale(1.15,1.15);
		-o-transform:scale(1.15,1.15);
        cursor: pointer;

      }

      a{
          text-decoration: none
      }

      .list-group{
          margin-top: 30px;
          margin-left: 50px
      }
      .slider-text{
          background-color: #33837285 !important;
      }
      .trending-image{
          height: 100px;
      }
      .trending-item{
          float: left;
          width: 20%;
          min-width: 220px;
          margin: auto;

      }
      #prod:hover{
       background-color: #2e5a2e85;
       border-radius: 15px
      }
      h3{
          text-decoration: none
      }
      .text{
          text-decoration: none
      }

      .search-box{
          width: 500px;
      }
      #account{
          border-radius: 30px;
      }
  </style>


<script>


    $(document).ready(function(){
        $('.name').hide();
        $('#prod').hover(function(){
            $('.name').hide();
        })

    $('#prod').mousemove(function (e) {
        $('.name').show();

        });
    })


    $(document).ready(function($){
  $('#sub-menu').on('change', function () {
	  var url = $(this).val(); // get selected value
	  if (url) { // require a URL
		  window.location = url; // redirect
	  }
	  return false;
  });
});
</script>
</body>
</html>
