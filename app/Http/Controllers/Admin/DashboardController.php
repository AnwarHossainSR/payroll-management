<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $clients_count = Client::count();
        $employee_count = Employee::count();
        return view('backend.dashboard',compact(
            'title','clients_count','employee_count'
        ));
    }
}
