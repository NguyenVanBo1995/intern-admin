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
        $book = Book::find($id);
        $book->customer_id = $request->input('');
        $book->customer_id = $request->input('customer_id');
        $book->date = $request->input('date');
        $book->number = $request->input('number');
        $book->save();
        return back()->with('edit', 'success');
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
