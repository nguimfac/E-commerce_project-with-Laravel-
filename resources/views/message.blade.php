<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  <center>
    <h1>Laravel Notification</h1>
    <form action="submitdata" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label for="">Name:</label>
        <input type="text"  name="testname" id="name_id"><br><br>
        <button type="submit"> submit</button>
    </form>
  </center>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>

      @if(Session::has('info'))
          var type = "{{Session::get('alert-type','info')}}";

          switch(type){
               case 'success':
                        toastr.success("{{Session::get('message')}}");
                        break;

               case 'info':
                        toastr.info("{{Session::get('message')}}");
                        break;

               case 'warning':
                        toastr.warning("{{Session::get('message')}}");
                        break;

                case 'error':
                        toastr.info("{{Session::get('message')}}");
                        break;
                
          }
      @endif


      
  </script>

</body>
</html>