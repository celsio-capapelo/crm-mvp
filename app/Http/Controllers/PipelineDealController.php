<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Deal;
use App\Models\Stage;
use App\Models\Pipeline;

class PipelineDealController extends Controller
{
    public function index(Pipeline $pipeline) {
        info($pipeline);
        $currentUser = 1;
        $userPipelines = Pipeline::where('user_id', $currentUser)->get();
        info($userPipelines);

        return Inertia::render('Deals/Index', [
            'deals' => Deal::with(['stage', 'company', 'primaryContact', 'owner', 'activities'])->get(),
            'stages' => Stage::all(),
            // 'pipeline' => $pipeline,
            'pipelines' => $userPipelines
        ]);
    }
}
