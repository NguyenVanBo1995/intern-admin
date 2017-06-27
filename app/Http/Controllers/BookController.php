<?php

namespace App\Http\Controllers;

use App\Model\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bookList()
    {
        $books = Book::all();
        return view('book_view')->with('books', $books);
    }
    
    public function editBook(Request $request)
    {
        $id = $request->input('book-id');
        $input = $request->only(['customer_id', 'date', 'number']);
        $update = Book::find($id)->update($input);
        if($update){
            return back()->with('update', 'success');
        }else{
            return back()->with('update', 'fails');
        }

    }

    public function removeBook(Request $request)
    {
        $book_id = $request->input('id');
        $result = Book::destroy($book_id);
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
}
