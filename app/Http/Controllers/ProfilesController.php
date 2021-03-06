<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($id) {
        $user = User::findOrFail($id);
        return view('home', [
            'user' => $user,
        ]);
    }
}
