<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Admin| Cemara',
            'active' => 'dashboard'
        ];
        return view('auth.index', $data);
    }
    
}
