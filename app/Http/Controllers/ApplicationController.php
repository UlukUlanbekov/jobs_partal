<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::where('user_id', Auth::id())->get();

        return view('applications.index', compact('applications'));
    }
}