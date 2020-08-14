<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\DB;
use App\Website;

class DashboardController extends Controller {

    public function __construct() {
        
    }

    public function index(Request $request) {
        return view('admin.dashboard', compact('data'));
    }

}
