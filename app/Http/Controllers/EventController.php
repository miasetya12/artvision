<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index() {
        return view('user.event', [
            'active' => 'event'
        ]);
    }
}