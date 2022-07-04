<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function index(){
        return view('landing');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('mainpage')
            ->with('save', 'Success')->withErrors('error', 'Failed');
        }
        return redirect("login")->withSuccess('You have entered invalid credentials');
    }

    public function mainpage(){
        if(Auth::check()) {
            return view('mainpage', ['tutor'=>ListTutors::
            where('is_complete',0)->where('email', Auth::tutor()->email)->get()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }

    public function postRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tutors',
            'phone' => 'required',
            'address' => 'required',
            'state' => 'required',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        $check->save();
        return redirect("landing")->with('save', 'Success')->withErrors('error', 'Failed');;
    }

    public function create(array $data){
        return Tutor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'state' => $data['state'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('landing');
    }
}
