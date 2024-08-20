<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function login(){
        return view('login');
    }
    public function manage_users(){
        $data = User::where('is_admin', '!=', '1')
        ->orderBy('created_at', 'desc')
        ->get();
    
        return view('admin.index',[
            'users' => $data,
        ]
    );
      
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users')->with('success', 'Utilisateur retiré');;
    }
}
