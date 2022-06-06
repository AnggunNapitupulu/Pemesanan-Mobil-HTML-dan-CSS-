<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\User;

class UserAuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function create(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20',
            'captcha' => 'required|captcha',
        ],
        [
            'name.required'     => 'Mohon isi nama Anda',
            'name.min:3'        => 'Minimal karakter nama Anda adalah 3 huruf',
            'email.required'    => 'Mohon isi email Anda',
            'email.email'       => 'Mohon input email Anda dengan format yang benar',
            'email.unique'      => 'Email tersebut sudah digunakan. Coba email yang lain',
            'password.required' => 'Mohon isi password Anda',
            'password.min:5'    => 'Minimal jumlah password Adalah 5 karakter',
            'password.max:20'   => 'Maaf, maksimal jumlah karakter untuk password adalah 20',
            'captcha.required'  => 'Mohon isi kode captcha anda',
            'captcha.captcha'   => 'Maaf, Jawaban Kode Captcha anda salah'
        ]);

        $query = DB::table('users')
            ->insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password)
            ]);

        if($query){
            return back()->with('success', 'Kamu sudah berhasil mendaftar, silahkan login');
        }else{
            return back()->with('fail', 'ada masalah');
        }
    }
    function check(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:20',
        ],
        [
            'email.required'    => 'Mohon isi email Anda',
            'email.email'       => 'Mohon input email Anda dengan format yang benar',
            'password.required' => 'Mohon isi password Anda',
            'password.min'      => 'Minimal jumlah password Adalah 5 karakter',
            'password.max'      => 'Maaf, maksimal jumlah karakter untuk password adalah 20',
        ]);

        // $user = User::where('email','=', $request->email)->first();
        //QUERY BUILDER
        $user = DB::table('users')
            ->where('email', $request->email)
            ->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('LoggedUser', $user->id);
                return redirect('home')->with('success', 'Selamat datang Kembali');
            }else{
                return back()->with('fail', 'Maaf, Password anda salah');
            }
        }else{  
            return back()->with('fail', 'Akun anda tidak ditemukan. Silahkan mendaftar');
        }
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    function profile(){

        if(session()->has('LoggedUser')){
            // $user = User::where('id', '=', session('LoggedUser'))->first();
            //QUERY BUILDER WAY
            $user = DB::table('users')
                    ->where('id', session('LoggedUser'))
                    ->first();
            $data = [
                'LoggedUserInfo'=>$user
            ];
        }
        return view('layouts.navigation', $data);
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
}

