<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use Illuminate\Http\Request;
use Validator;

class CustomerController extends Controller
{
    public function add(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $status = $request->input('status');
        $number = $request->input('number');
        if (!empty($name) && !empty($email) && !empty($number)) {
            $rules = array(
                'name' => 'required|max:255',
                'email' => 'required|email',
                'status' => 'required',
                'number' => 'required|numeric'
            );
            $message = array(
                'required' => 'The :attribute is required',
                'email' => 'The :attribute is email',
                'number' => 'The :attribute is numeric',
            );
            $validator = Validator::make($request->all(), $rules, $message);
            if ($validator->fails()) {
                dd($validator);
                return redirect('reservation')->withErrors($validator)->withInput();
            }
            $customer = new Customer();
            $customer->name = $name;
            $customer->email = $email;
            $customer->status = $status;
            $customer->number = $number;
            $customer->save();
        }
        return redirect('reservation');
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
        return back();
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

    public function reserver(Request $request){
        $id = $request->input('id');
        $customer = Customer::find($id);
        if (!empty($id)) {
            $customer->status = 1;
            $customer->save();
            echo json_encode(array(
                'status' => 'Success'
            ));die();
        }
        echo json_encode(array(
            'status' => 'Fail'
        ));die();
    }
}
