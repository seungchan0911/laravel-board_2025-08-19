<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegister() {
        return view('auth.register');
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function register(Request $request) {
        $isExistUser = User::where('email', $request->email)->exists();

        if ($isExistUser) {
            return back()->with('error', '이미 사용중인 이메일입니다.');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('login')->with('success', '회원가입에 성공했습니다.');
    }

    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', '이메일 또는 비밀번호가 틀렸습니다.');
        }
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('board')->with('success', '로그인에 성공했습니다.');
        } else {
            return back()->with('error', '이메일 또는 비밀번호가 틀렸습니다.');
        }
    }
    
    public function logout() {
        Auth::logout();

        return back()->with('success', '로그아웃에 성공했습니다.');
    }
}
