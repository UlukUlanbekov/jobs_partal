<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('jobs.index', compact('jobs'));
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);

        return view('jobs.show', compact('job'));
    }

    public function apply(Request $request, $jobId)
    {
        $request->validate([
            'cover_letter' => 'required|string',
            'resume' => 'required|file|mimes:pdf,doc,docx',
        ]);

        $resumePath = $request->file('resume')->store('resumes');

        Application::create([
            'position_id' => (int)$jobId,
            'user_id' => Auth::id(),
            'cover_letter' => $request->input('cover_letter'),
            'resume' => $resumePath,
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully.');
    }
}
