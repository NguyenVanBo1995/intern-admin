<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function add(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $categoryName = $request->input('category');
        if (!empty($categoryName)) {
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
        }
        return redirect('/item');
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

        if (!empty($name) && !empty($cateName) && !empty($price)) {
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
                    return back()->with(array(['update' => true]));
                }
            }
        }
        return back();
    }
}
