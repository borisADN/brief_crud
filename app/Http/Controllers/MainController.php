<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function login(){
        return view('login');
    }
    public function manage_users(){
        $data = User::where('email', '!=', 'edemwomagno@gmail.com')->get();
        // $exist = User::where('email', '!=', 'edemwomagno@gmail.com') ;
        return view('admin.index',[
            'users' => $data,
        ]
    );
      
    }

    public function logout(){
        
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users')->with('success', 'Utilisateur retiré');;
    }
}
