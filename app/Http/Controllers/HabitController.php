<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HabitController extends Controller {

    public function index() {
        return view('habit', [
                'habit' => 'Hey from HabitController'
            ]
        );
    }
}
