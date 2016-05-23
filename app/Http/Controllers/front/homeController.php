<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('front\template');
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
