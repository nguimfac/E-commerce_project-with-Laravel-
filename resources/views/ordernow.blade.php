@extends('master')
@section("content")
<div class=" custom-product ">
     <div class="container">
        <div class="col-sm-10">
            <table class="table table-striped">
                
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Amount</td>
                    <td>{{$total}} fcfa</td>
                  </tr>
    
                  <tr>
                    <th scope="row">2</th>
                    <td>Tax</td>
                    <td>0 fcfa</td>
                  </tr>
    
                  <tr>
                    <th scope="row">3</th>
                    <td>Delivery</td>
                    <td>10 fcfa</td>
                  </tr>
    
                  <tr>
                    <th scope="row">3</th>
                    <td>Total Amount</td>
                    <td>{{$total+10}}fcfa</td>
                  </tr>
                </tbody>
              </table> 
    
              <div>
                <form action="/orderplace" method="POST">
                    @csrf <!--ce mot toujours cle est applicable au lorsqu'on veut recuperer les donnees dans le formulair!-->
                    <div class="form-group">
                      <textarea name="address" type="email" placeholder="enter your address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Payment Method</label><br><br>
                      <input value="cash" type="radio" name="payment" id=""><span>online payment</span><br><br>
                      <input value="cash" type="radio" name="payment" id=""><span>EMI payment</span><br><br>
                      <input value="cash" type="radio" name="payment" id=""><span> payment on Delivery</span><br><br>
    
                    </div>
                   
                    <button type="submit" class="btn btn-success">Order Now</button>
                  </form>
            </div>
          </div>
     </div>
      
</div>
@endsection

    