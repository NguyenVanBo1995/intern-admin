<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use App\Model\Category;
use App\Model\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = \DB::table('category')->get();
        return view('category_view')->with('cates', $cates);
    }
    public function item(){
        $items = Item::get();
        $categories = Category::get();
        return view('item_view')->with('items', $items)->with('categories', $categories);
    }

    public function reservation(){
        $customers = Customer::get();
        return view('customer_view')->with('customers', $customers);
    }
}
