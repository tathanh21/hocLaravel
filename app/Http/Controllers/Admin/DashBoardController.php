<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function __construct(){
        echo 'Khoi dong controller';
    }
    public function index(){
        return 'DashBoard Welcome';
    }
}
