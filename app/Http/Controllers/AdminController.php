<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function changeAdminPassword(Request $request)
    {
        $user = Auth::user();
        if ($request->has('password') && $request->has('password_confirmation'))
        {
            if ($request->password == $request->password_confirmation)
            {
                $user->password = Hash::make($request->password);
            }
        }
        $user->save();
        return back();
    }
}
