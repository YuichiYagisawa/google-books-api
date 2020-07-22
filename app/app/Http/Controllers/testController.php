<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use Illuminate\Support\Facades\Redis;

class testController extends Controller
{
    public function input(Request $request)
    {
        $books = Books::all();
        // dd($books);

        // return view('input')->with($books);
        return view('input', compact('books'));
    }

    public function result(Request $request)
    {
        $post_data = $request->all();
        $data = "https://www.googleapis.com/books/v1/volumes?q=".$post_data["book"];
        $json = file_get_contents($data);
        $json_decode = json_decode($json, true);
        // dd($json_decode);
        return view('result', compact("json_decode"));
    }

    public function detail(Request $request)
    {
        $post_url = $request->all();
        $data = $post_url["book_url"];
        $json = file_get_contents($data);
        $json_decode = json_decode($json, true);
        // dd($json_decode);
        return view('detail', compact("json_decode"));
    }

    public function store(Request $request)
    {
        // dd($request);
        $new_book = new Books;
        $new_book->title = $request->title;
        $new_book->description = $request->description;
        $new_book->publishedDate = $request->publishedDate;
        $new_book->bookId = $request->id;
        // dd($new_book);
        $new_book->save();

        $books = Books::all();
        // dd($books);
        return redirect('/')->with('books');
    }
 
}
