<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Post;

class AdvicesController extends Controller
{
    public function index()
    {
        $posts = Post::where('category_id', '1')->published()->orderBy('created_at', 'desc')->get();
        return view('front.advices', compact('posts'));
    }


    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {

    }


    public function edit($id)
    {

    }


    public function update($id, Request $request)
    {

    }


    public function destroy($id)
    {

    }
}
