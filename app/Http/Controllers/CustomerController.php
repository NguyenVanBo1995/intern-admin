<?php

namespace App\Http\Controllers;

use App\Model\Book;
use App\Model\Customer;
use Illuminate\Http\Request;
use Validator;

class CustomerController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $status = $request->input('status');
        $number = $request->input('number');
        $date = $request->input('date');
        $current_date = date("Y-m-d");
        $rules = array(
            'name' => 'required|max:255',
            'email' => 'required|email',
            'number' => 'required|numeric',
            'date' => 'required|after:'.$current_date,
        );
        $message = array(
            'required' => 'The :attribute is required',
            'email' => 'The :attribute is email',
            'number' => 'The :attribute is numeric',
        );
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $customer = new Customer();
        $customer->name = $name;
        $customer->email = $email;
        if (!empty($status)) {
            $customer->status = $status;
        } else {
            $customer->status = 0;
        }
        $customer->number = $number;
        $customer->save();
        $book = new Book();
        $book->customer_id = $customer->id;
        $book->number = $number;
        $book->date  = $date;
        $book->save();

        return redirect()->route('adminBook')->with('bookStatus', 'success');
    }

    public function edit(Request $request)
    {
        $id = $request->input('customer-id');
        $name = $request->input('name');
        $email = $request->input('email');
        $birthday = $request->input('birthday');
        $status = $request->input('status');
        $number = $request->input('number');
        if (!empty($name) && !empty($id)) {
            $customer = Customer::find($id);
            $customer->name = $name;
            $customer->email = $email;
            $customer->birthday = $birthday;
            $customer->status = $status;
            $customer->number = $number;
            $customer->save();
        }
        return back()->with('update', 'true');
    }

    public function remove(Request $request)
    {
        $cus_id = $request->input('id');
        $result = Customer::destroy($cus_id);
        if ($result) {
            echo json_encode([
                'status' => 'Success'
            ]);
            die();
        } else {
            echo json_encode([
                'status' => 'Fail'
            ]);
            die();
        }
    }

    public function reserver(Request $request)
    {
        $id = $request->input('id');
        $customer = Customer::find($id);
        if (!empty($id)) {
            $customer->status = 1;
            $customer->save();
            echo json_encode(array(
                'status' => 'Success'
            ));
            die();
        }
        echo json_encode(array(
            'status' => 'Fail'
        ));
        die();
    }
}
