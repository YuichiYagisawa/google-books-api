<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{

    public function result(Request $request) {
        $post_data = $request->all();
        $data = "https://www.googleapis.com/books/v1/volumes?q=".$post_data["book"];
        $json = file_get_contents($data);
        $json_decode = json_decode($json, true);
        // dd($json_decode);
        return view('result', compact("json_decode"));
    }

    public function detail(Request $request) {
        $post_url = $request->all();
        $data = $post_url["book_url"];
        $json = file_get_contents($data);
        $json_decode = json_decode($json, true);
        // dd($json_decode);
        return view('detail', compact("json_decode"));
    }
 
}
