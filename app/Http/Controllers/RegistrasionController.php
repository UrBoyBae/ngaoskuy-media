<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class RegistrasionController extends Controller
{
    public function index()
    {
        return view('authentication.registrasi');
    }

    public function registrasion(Request $request)
    {
        $validatedData=$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);

        $uuid = Uuid::uuid4()->toString();

        $validatedData['id'] = $uuid;
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);

        $iduser=User::where('username',$request->username)->first();
        DetailUser::create([
            'id_user' => $iduser->id,
            'name' => $validatedData['name'],
        ]);

        $memberRole = Role::where('name', 'member')->first();

        $user->assignRole($memberRole);

        return redirect('/login');
    }
}
