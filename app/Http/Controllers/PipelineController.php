<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PipelineController extends Controller
{
    public function create() {
        return Inertia::render('Pipelines/Create');
    }
}
