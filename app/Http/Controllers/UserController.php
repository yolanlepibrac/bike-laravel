<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('users')->get();

        return ['users' => $users];
    }

    public function getUserById($id)
    {
        $users = DB::table('users')->get();

        return ['user' => User::findOrFail($id)];
    }
}