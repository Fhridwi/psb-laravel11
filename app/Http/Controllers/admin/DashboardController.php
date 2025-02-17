<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $title = 'Dashboard Admin';
        $name = session('name');
        $email = session('email');

        return view('admin.dashboard', compact('title', 'name', 'email')  );
    }
}
