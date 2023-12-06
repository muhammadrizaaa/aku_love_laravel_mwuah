<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userPageController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'user page',
        );
        return view('user',$data);
    }
}
