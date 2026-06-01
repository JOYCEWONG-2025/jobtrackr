<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return response()->json(auth()->user()->jobs()->latest()->get());
    }

    public function store(Request $request)
    {
        $job = auth()->user()->jobs()->create($request->all());
        return response()->json($job, 201);
    }

    public function show(Job $job)
    {
        return response()->json($job);
    }

    public function update(Request $request, Job $job)
    {
        $job->update($request->all());
        return response()->json($job);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return response()->json(null, 204);
    }
}