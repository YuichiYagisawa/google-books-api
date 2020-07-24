<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Books;
use Illuminate\Http\Request;

class ApitestsController extends Controller
{
    public function serch(Request $request)
    {
        $serchWord = $request->get('keyword');
        $books = Books::where('title', 'LIKE', "%{$serchWord}%")->get()->all();
        // dd($books);
        // $data = [
        //     'id' => $books->id,
        //     'title' => $books->title
        // ];

        // return redirect('/')->with($books);
        // return view('input', compact('books')) -> render();
        // return view('input');
        return response($books);
    }
}
