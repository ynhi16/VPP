<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin');
    }
    public function show_dashboard() {
        return view('admin.dashboard');
    }
    public function show_all_bill() {
        return view('admin.all-bill');
    }
    public function show_account() {
        return view('admin.account');
    }
}
