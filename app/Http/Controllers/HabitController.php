<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class HabitController extends Controller
{
    private $user = null;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->find();
        return view(
            'habit',
            [
                'users' => $users,
            ]
        );
    }
}
