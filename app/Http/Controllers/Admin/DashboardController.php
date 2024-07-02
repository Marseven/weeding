<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $attendee = Registration::where('deleted', null)->get()->count();
        return view('admin.dashboard', compact('attendee'));
    }
}
