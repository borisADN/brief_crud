<?php

namespace App\Http\Controllers;

use App\Mail\AccountMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function add_user()
    {
        return view('admin.add-user');
    }
    public function handle_add_user(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = $request->role;
        $user->save();
        Mail::to($request->email)->send(new AccountMail($request->password));
        return redirect()->route('users')->with('success', 'Utilisateur ajouté');;
    }
    public function edit_user($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit-user', [
            'user' => $user,
        ]);
    }
    public function handle_login(Request $request)
    {
        $credentials = $request->only('email', 'password');;
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->route('users')->with('message', 'Connexion réussie !')->with('alert-type', 'success');
        } else {
            return 'no';
        }
    }
    public function handle_edit_user(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->update();

        return redirect()->route('users')->with('success', 'Utilisateur mis a jour!');;
    }
}
