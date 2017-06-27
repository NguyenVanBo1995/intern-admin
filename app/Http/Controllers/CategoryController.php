<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Category;
use Validator;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add(Request $request)
    {
        $name =  $request->input('name');
        $description = $request->input('description');
        $messages = [
            'required' => 'The :attribute field is required.',
            'min:10'=> 'The :attribute field is least 10 character',
            'max:255'=> 'The :attribute field is max 255 Character',
        ];
//        dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required|min:10'
        ], $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)
                ->withInput();
        }
        if ($name != null) {
            $cate = new Category();
            $cate->name = $name;
            $cate->description = $description;
            $cate->save();
        }
        return redirect('admin');
    }
    public function get($id)
    {
        if (!empty($id) && is_numeric($id)) {
            $category = Category::find($id);
            dd($category);
        }
    }
    public function update($id, $name, $description)
    {
        if (!empty($id)) {
            if ($name != null) {
                \DB::table('category')
                    ->where('id', $id)
                    ->update(['name' => $name, 'description' => $description]);
            }
        }
        echo "success";
    }
    public function remove(Request $request)
    {
        $cate_id = $request->input('id');
        $result = Category::destroy($cate_id);
        if($result){
            echo json_encode([
                'status' => 'Success'
            ]);
            die();
        }else{
            echo json_encode([
                'status' => 'Fail'
            ]);
            die();
        }
    }
    public function edit(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        $cateId = $request->input('cate-id');
        if(! empty($name) && ! empty($description) && ! empty($cateId)){
            $update = \DB::table('category')
                ->where('id', $cateId)
                ->update(['name' => $name, 'description' => $description]);
            if($update){
                return back()->with(array(['update'=>true]));
            }
        }
        return back();
    }
}