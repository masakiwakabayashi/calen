<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Validator;
use DB;
use App\User;
use App\Http\Requests\UserNameEditRequest;
use App\Http\Requests\UserPasswordEditRequest;

class UserProfileController extends Controller
{
    public function show() {
        return view('user_profile/show', ['user' => app('current_user')]);
    }

    public function editUserName() {
        return view('user_profile/edit_user_name', ['user' => app('current_user')]);
    }

    public function editPassword() {
        return view('user_profile/edit_user_password', ['user' => app('current_user')]);
    }

    public function updateUserName(UserNameEditRequest $request) {
        try {
            $user = DB::transaction(function() use($request) {
                $user = app('current_user');
                $user->name = $request->name;
                $user->update();
                return $user;
            });
            return redirect()->route('home', ['user' => $user]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', '予期せぬエラーが発生しました。運営元へご連絡下さい。');
        }
    }

    public function updatePassword(UserPasswordEditRequest $request) {
        try {
            $user = DB::transaction(function() use($request) {
                $user = app('current_user');
                $user->password = Hash::make($request['password']);
                $user->update();
                return $user;
            });
            return redirect()->route('home', ['user' => $user]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', '予期せぬエラーが発生しました。運営元へご連絡下さい。');
        }
    }
}
