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
            $user = Auth::user();
            $roles = $user->getRoleNames()->toArray();
            // dd($roles);

            switch (true) {
                case in_array('member', $roles):
                    return redirect()->intended(route('member.home.index'));
                    break;
                case in_array('ustadz', $roles):
                    return redirect()->intended(route('ustadz.home.index'));
                    break;
                case in_array('admin', $roles):
                    return redirect()->intended(route('admin.home.index'));
                    break;
                default:
                    return redirect()->back()->with('error', 'Role malfunction');
                    break;
            }
            // $user = Auth::User();
            // $roles = $user->getRoleNames()->first();

        } else {
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
