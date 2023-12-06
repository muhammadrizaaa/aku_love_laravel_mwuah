<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;


class userAuthController extends Controller
{

    public function __construct(){
        $this->middleware('check_login');
    }
    public function index(){
        $user = Auth::user();
        if($user){
            if($user->role == "admin"){
                return redirect('')->intended('admin');
            }
            else if($user->role == 'user'){
                return redirect('')->intended('user');
            }
        }
        return view('login');
    }

    public function loginProcess(Request $request){
        $request ->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            if($user->role == 'admin'){
                return redirect()->intended('admin');
            }

            else if($user->role == 'user'){
                return redirect()->intended('user');
            }
            return redirect('login')->withInput()->withErrors(['failed_login' => 'you are not our user or admin']);
        }
        return redirect('login')->withInput()->withErrors(['failed_login'=>'these credentials do not match with ours']);
    }

    public function register(){
        return view('register');
    }

    public function registerProcess(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:250',
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        if( $validator ->fails() ){
            return redirect('register')->withErrors($validator)->withInput();
        }

        $request ['role'] ='user';
        $request ['password'] = bcrypt($request->password);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $user = Auth::User();
            if($user->role == 'admin'){
                return redirect('dashboard')->intended('admin');
            }

            else if($user->role == 'user'){
                return redirect('dashboard')->intended('user');
            }
            return redirect('login')->withInput()->withErrors(['failed_login' => 'you are not our user or admin']);
        }
        



    }

    public function logout(Request $request){
        $request->session()->flush();

        Auth::logout();
        return redirect('login');
    }

    public function loginTes(Request $request){
        return view('tes.login');
    }
    public function loginTesProcess(Request $request){
        $request ->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){

            $user = Auth::User();
            if($user->role == 'admin'){
                return redirect('dashboard')->intended('admin');
            }

            else if($user->role == 'user'){
                return redirect('dashboard')->intended('user');
            }
            return redirect('login')->withInput()->withErrors(['failed_login' => 'you are not our user or admin']);
        }
        return redirect('login')->withInput()->withErrors(['failed_login'=>'these credentials do not match with ours']);
    }
    
}
