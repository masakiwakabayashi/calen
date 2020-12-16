<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/home');
    }
    
    public function show() {
        $user = Auth::user();
        return view('admin/show', ['user' => $user]);
    }

    public function edit() {
        $user = Auth::user();
        return view('admin/edit', ['user' => $user]);
    }

    public function editPassword() {
        $user = Auth::user();
        return view('admin/editpassword', ['user' => $user]);
    }

    public function update(Request $request) {
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();
        
        return view('admin/show', ['user' => $user]);
    }

    public function updatePassword(Request $request) {
        $user = Auth::user();
        $user->password  = Hash::make($request['password']);
        $user->save();
        
        return view('admin/show', ['user' => $user]);
    }
}
