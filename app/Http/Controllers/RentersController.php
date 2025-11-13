<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentersController extends Controller
{
    public function index() {
        $data = array(
            "title"             => "Data Renters",
            // "menuAdminUser"     => "active",
        );

        return view('admin/renters/index', $data);
    }
}
