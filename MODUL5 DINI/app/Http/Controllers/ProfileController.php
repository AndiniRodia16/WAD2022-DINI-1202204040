<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile', [
            'user' => auth()->user()
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'no_hp' => 'required|numeric',
            'password' => 'nullable|string|min:8|confirmed',
            'navbar' => 'required|in:primary,danger,warning,secondary,success'
        ]);

        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->no_hp = $request->no_hp;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->update();

        $request->session()->put('navbar', $request->navbar);

        return redirect(route('profile'))->with('success', 'Data berhasil diubah');
    }
}
