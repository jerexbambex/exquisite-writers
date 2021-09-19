<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function mode(Request $request, User $user)
    {
        $mode = $user->theme;

        if($mode == 'dark') {
            $user->theme = 'light';
            $user->update();

            return back();
        }

        $user->theme = 'dark';
        $user->update();

        return back();

    }
}
