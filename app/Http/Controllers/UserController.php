<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, User $user)
    {
        $request->validate([
            'pw' => 'required|digits:4|confirmed',
        ]);

        $user->update(['password'=>$request->pw, 'blocked'=>false]);

        return 'Welcome to GIPay';
    }
}
