<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HabitController extends Controller {

    public function index()
    {
        $users = $this->getAllUsers();
        return view('habit', [
                'users' => $users,
                'habit' => 'Hello from HabitController'
            ]
        );
    }

    private function getAllUsers()
    {
        $users = DB::table('users')->select('name', 'email')->get();
        return $users;
    }
}
