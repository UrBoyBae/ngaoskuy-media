<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use App\Models\User;
use Google\Service\ContainerAnalysis\Detail;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $userDetail = DetailUser::where('id_user', $user->id)->first();
        return view('components.templates.settings', [
            'role' => $user->getRoleNames(),
            'user' => $user,
            'detail_user' => $userDetail,
            'navbar_visibility' => '0',
            'footer_visibility' => '0',
        ]);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $userDetail = DetailUser::where('id_user', $user->id)->first();

        // Validate the request data
        $validator = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $user->id,
        ]);

        if ($user->username != $validator['username']) {
            User::where('id', $user->id)->update(['username' => $validator['username']]);
        }

        if ($userDetail->name != $validator['name']) {
            DetailUser::where('id_user', $user->id)->update(['name' => $validator['name']]);
        }

        if ($request->new_password != NULL && $request->new_password == $request->confirm_password) {
            $encrypted = bcrypt($request->new_password);
            User::where('id', $user->id)->update(['password' => $encrypted]);
        }

        session(['full_name' => $userDetail->name]);
        return redirect(route('settings.index'));
    }
}
