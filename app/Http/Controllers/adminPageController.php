<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class adminPageController extends Controller
{
    
    public function index()
    {
        $data = array(
            'title' => 'user page',
        );
        return view('database',$data);
    }
}
