@extends('master')
@section("content")
<div class="row">
                  <div class="col-lg-12">
                    <div class=" panel panel-default ">
                      <div class="panel-body">
                        
<br>
                        <h5>All the Comments</h5>
                         @foreach ($data as $item)
                              {{$item->name}}
                              <p> {{$item->contains}}</p>
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

