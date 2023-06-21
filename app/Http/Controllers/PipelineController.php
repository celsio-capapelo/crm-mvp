<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

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
}
