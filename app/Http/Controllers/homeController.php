<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class homeController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'home page'
        );
        return view('home', $data);
    }
}
