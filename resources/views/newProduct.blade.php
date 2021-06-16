@extends('masters')


@section('title')
    dashboard of admin
@endsection


@section('content')
    
<div class="container offset-md-2">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Edit Profile</h5>
            
            <div class="">
                <div class="card card-user">
                  <div class="image">
                    <img src="https://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/128/Actions-dashboard-show-icon.png" alt="...">
                  </div>
                  <div class="card-body">
                    <div class="author">
                      <a href="#">
                        <img class="avatar border-gray" src="https://icons.iconarchive.com/icons/gakuseisean/ivista-2/128/Files-New-File-icon.png" alt="...">
                      </a>
                      <p class="description">
                        michael24
                      </p>
 
                      <div class="card-body">
                        <form id="registration_form" action="newProduct" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="row">
                            <div class="col-md-5 pr-1">
                              <div class="form-group">
                                <label>Name of Products</label>
                                <input type="text"  id="name" class="form-control" placeholder=" products" name="name">
                                 <span id="mes" class="text-danger">error</span>
                              </div>
                            </div>
                            <div class="col-md-3 px-1">
                              <div class="form-group">
                                <label>Price</label>
                                <input type="text" id="price" class="form-control" placeholder="price" name="price">
                              </div>
                            </div>

                            
                              
                            <div class="col-md-4 pl-1">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <input type="text" id="category" name="category" class="form-control" placeholder="category">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 pr-1">
                              <div class="form-group">
                                <label>Description</label>
                                <input type="text"id="description" class="form-control" style="padding: 25px" name="description" placeholder="description">
                              </div>
                            </div>
                            
                          </div>
            
                            <div class="col-md-4 pl-1">
                              <div class="">
                                <label>Add image</label>
                                <input type="file"  name="file" required>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-4 pl-1 offset-md-4">
                            <div class="">
                              <button type="submit" class="btn btn-info" name="gallery" > New Products <i class="fas fa-plus-square"></i> </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  
                  </div>
                  <hr>
                 
                </div>
              </div>

          </div>
         
        </div>
      </div>

      
    </div>
  </div>

  <script>
 


 $(function()
 {
  toastr.options.timeOut = 2000; // 2s
    $('button').click(function() {
       toastr.success('Add to cart successful');
    });
 })
    $(function(){
      $('#mes').hide();
      var error_name= "false"
        $('#name').focusout(function ()
        {
          check_username()
        })

        $('#price').focusout(function ()
        {
          check_username()
        })

        $('#name').focusout(function ()
        {
          check_username()
        })

   function check_username ()
   {
     var username_length =$("#name").val().length;

     if(username_length < 5 || username_length>20)
      {
        $('#mes').html("value must be between 5-20");
        $('#mes').show();
        error_name = true
      }
      else
      {
        $('#mes').hide()
      }
   }


   function pasword()
   {
    var username_length =$("#name").val().length;
      if(username_length < 8)
        {
          $('#mes').html("value must have at least 8 charactar");
          $('#mes').show();
          error_name = true
        }
        else
        {
          $('#mes').hide()
        }
          }

    function email()
    {
      var pattern = new  RegExp(/^[+a-zA-Z0-9._-]+@[a-za-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

      if(pattern.test($("#name").val()))
      {
        $('#mes').hide();
        
      }
      else
      {
        $('#mes').html("value must have at least 8 charactar");
       $('#mes').show();
       error_name = true
      }
    }

    })

    
  </script>


@endsection



@section('scripts')
    
@endsection