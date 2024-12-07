<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;

use Stripe;
use Session;

class HomeController extends Controller
{
    public function stripe($value)

    {

        return view('home.stripe', compact('value'));
    }
    public function stripePost(Request $request, $value)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([

            "amount" => $value * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from Complete"
        ]);
        $name = Auth::user()->name;
        $address = Auth::user()->address;
        $phone = Auth::user()->phone;
        $userid = Auth::user()->id;
        $cart = Cart::where('user_id', $userid)->get();

        foreach ($cart as $item) {
            $order = new Order;
            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->status = 'in progress';
            $order->user_id = $userid;
            $order->product_id = $item->product_id;
            $order->paymant_status = "paid";
            $order->save();
        }
        Cart::where('user_id', $userid)->delete();
        return redirect('/mycart')->with('success', 'Payment successful');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $count = 0;
        // if (Auth::id()) {
        //     $user = Auth::user();
        //     $userid = $user->id;
        //     $count = Cart::where('user_id', $userid)->count();
        // }
        $user = User::where('usertype', 'user')->get()->count();
        $product = Product::all()->count();
        $order = Order::all()->count();
        $delivered = Order::where('status', 'delivered')->get()->count();
        return view('admin.index', compact('user', 'product', 'order', 'delivered'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function home()
    {
        $product = Product::all();
        $count = 0;
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
        }
        return view('home.index', compact('product', 'count'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login_home()
    {
        $product = Product::all();
        $count = 0;
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
        }
        return view('home.index', compact('product', 'count'));
    }

    /**
     * Display the specified resource.
     */
    public function product_details($id)
    {
        $datas = Product::find($id);
        $count = 0;
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
        }
        return view('home.product_details', compact('datas', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function add_cart($id)
    {
        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;
        $data = new Cart;
        $data->product_id = $product_id;
        $data->user_id = $user_id;
        $data->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */

    public function my_cart()
    {
        $count = 0;
        $cart = [];
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
            // Paginate the cart items azm
            $cart = Cart::where('user_id', $userid)->paginate(3);
        }
        return view('home.mycart', compact('count', 'cart'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function removecart($id)
    {
        Cart::destroy($id);
        return redirect()->back();
    }

    public function comfirm_order(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $user = Auth::user()->id;
        $cart = Cart::where('user_id', $user)->get();

        foreach ($cart as $item) {
            $order = new Order;
            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->status = 'in progress';
            $order->user_id = $user;
            $order->product_id = $item->product_id;
            $order->save();
        }
        Cart::where('user_id', $user)->delete();
        return redirect()->back();
    }
    public function myorders()
    {
        $user = Auth::user()->id;
        $count = Cart::where('user_id', $user)->count();
        // Paginate the orders azm
        $order = Order::where('user_id', $user)->paginate(3);
        return view('home.order', compact('count', 'order'));
    }

    // public function contact()
    // {
    //     $user = Auth::user()->id;
    //     $count = Cart::where('user_id', $user)->get()->count();
    //     $order = Order::where('user_id', $user)->get();
    //     return view('home.contact', compact('count', 'order'));
    // }
    // Add this in your HomeController
    public function contact()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }

        $count = Cart::where('user_id', $user->id)->count();
        $order = Order::where('user_id', $user->id)->get();

        return view('home.contact', compact('count', 'order'));
    }
}
