<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Item;
use Illuminate\Http\Request;
use Validator;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $categoryName = $request->input('category');
        $category = Category::where('name', $categoryName)->get()[0];
        if (!empty($category)) {
        }
        if ($name != null) {
            $item = new Item();
            $item->name = $name;
            $item->description = $description;
            $item->price = $price;
            $item->category_id = $category->id;
            $item->save();
            echo "name";
        }
        return redirect('admin/item');
    }

    public function remove(Request $request)
    {
        $item_id = $request->input('id');
        $result = Item::destroy($item_id);
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

    public function edit(Request $request)
    {
        $id = $request->input('item-id');
        $name = $request->input('name');
        $description = $request->input('description');
        $cateName = $request->input('category');
        $price = $request->input('price');

        $rule = array(
            'name' => 'required',
            'cateName' => 'category',
            'price' => 'required|numeric',
        );

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $category = Category::where('name', $cateName)->get()[0];
            if (!empty($category)) {
                $update = Item::where('id', $id)
                    ->update([
                        'name' => $name,
                        'description' => $description,
                        'price' => $price,
                        'category_id' => $category->id
                    ]);
                if ($update) {
                    return back()->with('update', 'success');
                }
            }
        }
    }
}
