<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\PipelineController;
use App\Models\Pipeline;

class PipelineController extends Controller
{
    public function index() {
        return Inertia::render('Pipelines/Index', ['page' => 'index']);
    }

    public function show() {
        // dd(request()->headers->get('X-Inertia'));
        return Inertia::render('Pipelines/Show', ['page' => 'show']);
    }

    public function create() {
        return Inertia::render('Pipelines/Create', ['page' => 'create']);
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => 'required',
            'purpose_id' => 'required',
            'user_id' => 'required',
        ], [
            'purpose_id.required' => 'The purpose_id field is required',
        ]); 

        Pipeline::create($attributes);

        return redirect('/pipelines');
    }
}