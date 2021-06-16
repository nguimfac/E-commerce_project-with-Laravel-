<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\cart;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

use function Symfony\Component\String\b;

class ProductController extends Controller
{


  public function testfunction(Request $req){

        $name =$req->testname;

        if ($name =='laravel') {
            $notification =array(
                'message'=> 'Successfully get laravel data',
                'alert-type'=> 'success'
            );
        } else if($name =='found'){
            $notification =array(
                'message'=> 'Successfully get laravel data',
                'alert-type'=> 'info'
            );
        } else if($name =='notfound'){
            $notification =array(
                'message'=> 'Successfully get laravel data',
                'alert-type'=> 'warning'
            );
        }
        else{
            $notification =array(
                'message'=> 'Successfully get laravel data',
                'alert-type'=> 'error'
            );
        }

        return back()->with($notification);

    }
     function  index(){

     $data =product::orderBy('id','desc')->paginate(4);

         return view('product',['products'=>$data]);
     }
     function  index2(){

        $data =product::all();

            return view('admin.dashboard',['products'=>$data]);
        }

     function detail($id){

        $data= product::find($id);

        $comment = DB::table('comments')
        ->join('users', 'users.id', '=', 'comments.id')
        ->join('products', 'products.id', '=', 'users.id')
        ->select( 'products.id','users.name', 'comments.contains')
        ->get();

        return view('detail')
        ->with(['product'=>$data])
        ->with(['comment'=>$comment]);
  }

  function search(Request $req){
      $data = product::
     where('name', 'like' ,'%'.$req->input('query').'%')
     ->get();
     return view('search',['products'=>$data]);
  }

 public function AddToCard(Request $req)
  {
    if($req->session()->has('user'))
    {
        $cart =  new cart();
        $cart->user_id=$req->session()->get('user')['id'];// pour reccuperer l'id du user connecte avec la verification  dans le if
        $cart->product_id =$req->product_id;
        $cart->save();
        return back()->with('success','Item created successfully!');
    }
    else{
        return redirect('/login');
    }

  }

 static function cartItem()
  {
    $userId = Auth::check() ? Auth::id() : true;
    return Cart::where('user_id',$userId)->count();
  }

   function cartlist(){
       $userId = Auth::check() ? Auth::id() : true; // pour reccuperer l'id du user connecte
       $products = DB::table('card')
       ->join('products','card.product_id','=','products.id')
       ->where('card.user_id',$userId)
       ->select('products.*','card.id as card_id')
       ->get();
       return view('cartlist',['products'=>$products],['products'=>$products]);


    }

    function ordernow()
    {
        $userId = Auth::check() ? Auth::id() : true; // pour reccuperer l'id du user connecte
       $total= $products = DB::table('card')
        ->join('products','card.product_id','=','products.id')
        ->where('card.user_id',$userId)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }

    function removecart($id)
    {
        Cart::destroy($id); //permet de supprimer un element du panier avec id passe en paramatre
        return Redirect('cartlist'); //rediriger a la vue cardlist
    }

    function remove_to_list($id)
    {
        Product::destroy($id); //permet de supprimer un element du panier avec id passe en paramatre
        return back(); //rediriger a la vue cardlist
    }


    function orderplace(Request $req)
    {
        $userId = Auth::check() ? Auth::id() : true;
        $allcart = Cart::where('user_id',$userId)->get();
        foreach($allcart as $cart)
        {

           $order = new Order();
           $order->product_id=$cart['product_id'];
           $order->user_id=$cart['user_id'];
           $order->statuts="pending";
           $order->payment_method=$req->payment;
           $order->payment_statuts="pending";
           $order->address=$req->address;
           $order->save();
           Cart::where('user_id',$userId)->delete();
        }
   return redirect('ordernow');
    }

    function myorders()
    {
        $userId = Auth::check() ? Auth::id() : true; // pour reccuperer l'id du user connecte
        $orders = DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
         return view('myorders',['orders'=>$orders]); //chager les donnees dans la vue
    }



    function create(Request $requ)
    {
      // verifier les valeurs entre

         $requ->validate([
             "name"=> "required",
             "price"=>"required",
             "category"=> "required",
             "description" =>"required"
         ]);


         if($requ->hasFile('file')){

               $requ->validate([
                   "image" => "mimes:png,jpg"
                   ]);
                   $requ->file->store('products', 'public');

                   $products = new Product([
                       "name"=>$requ->get('name'),
                       "price"=>$requ->get("price"),
                       "category"=>$requ->get("category"),
                       "description"=>$requ->get("description"),
                       "gallery"=> $requ->file->getClientOriginalName()
                   ]);

                 $products->save();

                 return back();
         }

    }

  public  function AddComm(Request $req , $id)
    {
        $req->validate([
            "contains" => "required|max:1000"
        ]);

        if($req->session()->has('user'))
        {
            $com =  new Comment();
            $com->product_id =$req->product_id;
            $com->user_id=$req->session()->get('user')['id'];// pour reccuperer l'id du user connecte avec la verification  dans le if
            $com->contains =$req->comments;
            $com->save();
            return back()->with('success','Item created successfully!');
        }
        else{
            return back();
        }
    }

    public function fetchComment()
    {

        $data = DB::table('comments')
       ->join('users', 'users.id', '=', 'comments.id')
       ->join('products', 'products.id', '=', 'users.id')
       ->select('products.id', 'users.name', 'comments.contains')
       ->get();
     return view('comment', compact('data'));
    }


}

