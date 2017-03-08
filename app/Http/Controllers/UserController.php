<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function listusers(){
        $users = User::all();
        return view('listausuarios', ['users' => $users]);
    }
}
