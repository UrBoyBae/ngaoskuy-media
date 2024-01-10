<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('authentication.login');
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            // dd(Auth::user());

            $name = DetailUser::where('id_user', auth()->user()->id)->first();

            // dd($name);
            return redirect()->intended(route('member.home.index'));

            // $user = Auth::User();
            // $roles = $user->getRoleNames()->first();

        }
        else
        {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('splash-screen'));
    }
}
