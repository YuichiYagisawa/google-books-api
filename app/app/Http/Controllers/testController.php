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
}
