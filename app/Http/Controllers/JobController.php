<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(): View
    {
        $jobs = Job::all();
        return view(
            'jobs.index',
            [
                'jobs' => $jobs
            ]
        );
    }

    public function create(): View
    {
        return view('jobs.create');
    }

    public function show(Job $job): View
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $title = $validatedData['title'];
        $description = $validatedData['description'];

        Job::create([
            'title' => $title,
            'description' => $description,
        ]);

        return redirect()->route('jobs');
    }
}
