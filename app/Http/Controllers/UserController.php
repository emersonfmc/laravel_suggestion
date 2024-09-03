<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function pages_users()
    {
        $users = User::get();
        return view('pages.users_page', compact('users'));
    }
}
