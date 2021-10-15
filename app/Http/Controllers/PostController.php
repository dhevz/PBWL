<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('blog');
    }

    public function print($category = "")
    {
        switch($category){
            case 'Technology':$result = DB::select("SELECT * from posts where category = 'technology'");break;
            case 'Gaming' :  $result = DB::select("SELECT * from posts where category = 'gaming'");break;
            case 'Life' : $result = DB::select("SELECT * from posts where category = 'life'");break;
            default : $result = DB::select("SELECT * from posts");
        }

        return view('blog', ['posts' => $result]);
    }

    public function post($id = "")
    {
        $result = DB::select("select * from posts where id = $id");

        return view('posts', ['posts' => $result]);
    }
}
