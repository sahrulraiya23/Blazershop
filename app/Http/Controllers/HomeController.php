<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Models\User;

use App\Models\Product;

use App\Models\Checkout;

use App\Models\Cart;

use App\Models\Order;
use App\Order as AppOrder;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $data = product::paginate(3);
            $user = auth()->user();
            $count = cart::where('phone', $user->phone)->count();

            return view('user.home', compact('data', 'count'));
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = product::paginate(3);
            return view('user.home', compact('data'));
        }
    }

    public function ourproduct()
    {
        $data = product::paginate(3);
        return view('user.ourproduct', compact('data'));
        $user = auth()->user();
    }

    public function contactus()
    {
        $data = product::paginate(3);
        return view('user.contactus', compact('data'));
        $user = auth()->user();
    }

    public function blog()
    {

        $data = product::paginate(3);
        return view('user.blog', compact('data'));
        $user = auth()->user();
    }


    public function search(Request $request)
    {
        $search = $request->search;

        if ($search == '') {
            $data = product::paginate(3);
            return view('user.home', compact('data'));
        }

        $data = product::where('title', 'Like', '%' . $search . '%')->get();

        return view('user.home', compact('data'));
    }
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;

            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back()->with('message', 'Product Update Successfully');
        } else {
            return redirect('login');
        }
    }
    public function showcart()
    {
        $user = auth()->user();
        $cart = cart::where('phone', $user->phone)->get();
        $count = cart::where('phone', $user->phone)->count();
        return view('user.showcart', compact('count', 'cart'));
    }


    public function deletecart($id)
    {
        $data = cart::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Product Removed Successfully');
    }


    public function checkout()
    {
        $cart = Cart::with('relations:product')->where('column:id')->auth()->user()->id->get();
        foreach ($cart as $cartProduct) {
            $product = product::find($cartProduct->id);
            if (!$product || $product->quantity_left < $cartProduct->qty) {
                $this->checkout_message = 'Error: product '. $cartProduct->product->name.' not found in stock';
            }
        }
    }
    public function order(Request $request)
    {
        $itemuser = $request->user();//ambil data user
        $itemcart = Cart::where('id', $itemuser->id)
                        ->where('status_cart', 'cart')
                        ->first();
        if ($itemcart) {
            $data = array('title' => 'Shopping Cart',
                        'itemcart' => $itemcart);
            return view('alamatpengiriman.index', $data)->with('no', 1);            
        } else {
            return abort('404');
        }
    }
}
