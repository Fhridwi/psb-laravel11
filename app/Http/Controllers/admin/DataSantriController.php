<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Santri;
use Illuminate\Http\Request;

class DataSantriController extends Controller
{
    public function index() {

        $title = "Data Santri";
        $santris = Santri::paginate(10);

        return view("admin.data_santri", compact('title', 'santris'));
    }
}
