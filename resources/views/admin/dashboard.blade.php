@extends('masters')
@section('title')
    dashboard of admin
@endsection
@section('content')
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> All Products</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Category
                      </th>
                      <th>
                        Designation
                      </th>
                      <th >
                        image
                      </th>
                      <th >
                        Action
                      </th>
                    </thead>
                    <tbody id="myTable">
                      @foreach ($products as $item)     
                      <tr>
                        <td>
                          {{$item['name']}}
                        </td>
                        <td>
                          {{$item['price']}}
                        </td>
                        <td>
                          {{$item['category']}}
                        </td>
                        

                        <td>
                          {{$item['description']}}
                        </td>

                        <td>
                          <img width="15%" class="img-circle" src="{{$item['gallery']}}">

                        </td>
                        <td>
                          <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
                         </td>
                        <td>
                          <a href="/remove_to_list/{{$item->id}}"  onclick="return(confirm('voulez vous supprimer ce produit  de la list ?'))" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
                        </td>

                        
                        
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
          $(document).ready(function(){
            $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
          </script>
@endsection



@section('scripts')
    
@endsection