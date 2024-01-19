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

            $name = DetailUser::where('id_user', auth()->user()->id)->first();
            $user = Auth::user();
            $roles = $user->getRoleNames();

            // dd($roles);

            switch ($roles[0]) {
                case ('member'):
                    return redirect()->intended(route('member.home.index'));
                    // return 'member';
                    break;
                case ('ustadz'):
                    return redirect()->intended(route('ustadz.home.index'));
                    // return 'ustadz';
                    break;
                case ('admin'):
                    return redirect()->intended(route('admin.home.index'));
                    // return 'admin';
                    break;
                default:
                    return redirect()->back()->with('error', 'Role malfunction');
                    break;
            }

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
