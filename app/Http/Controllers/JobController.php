<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{

    use AuthorizesRequests;

    public function index(): View
    {
        $jobs = Job::paginate(3);
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

    public function edit(Job $job)
    {
        $this->authorize('update', $job);
        return view('jobs.edit', [
            'job' => $job
        ]);
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
        $path = '';

        if ($request->hasFile('company_logo')) {
            $path = $request->file('company_logo')->store('logos', 'public');
        }

        $user_id = auth()->user()->id;

        Job::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $user_id,
            'salary' => 10000,
            'company_logo' => $path,
        ]);

        return redirect()->route('jobs')->with('success', "Record created!");
    }

    public function update(Request $request, Job $job)
    {
        $this->authorize('update', $job);


        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $title = $validatedData['title'];
        $description = $validatedData['description'];

        if ($request->hasFile('company_logo')) {
            Storage::delete('public/logo/' . basename($job->company_logo));

            $path = $request->file('company_logo')->store('logos', 'public');
            $job->company_logo = $path;
        }

        $job->title = $title;
        $job->description = $description;

        $job->update();

        return redirect()->route('jobs')->with('success', "Record created!");
    }

    public function destroy(Job $job)
    {
        // POLICY
        $this->authorize('delete', $job);

        if ($job->company_logo) {
            Storage::delete('public/logo/' . basename($job->company_logo));
        }

        $job->delete();

        return redirect()->route('jobs')->with('success', "Record deleted!");
    }
}
