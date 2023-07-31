<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Deal;
use App\Models\Stage;
use App\Models\Pipeline;
use App\Models\Purpose;

class PipelineDealController extends Controller
{
    public function index(Pipeline $pipeline) {
        $currentUser = 1;
        $userPipelines = Pipeline::with(['purpose'])->where('user_id', $currentUser)->get();

        return Inertia::render('Deals/Index', [
            'deals' => Deal::with(['stage', 'company', 'primaryContact', 'owner', 'activities'])->get(),
            'stages' => Stage::all(),
            'pipelines' => $userPipelines,
            'purposes' => Purpose::all(),
        ]);
    }
}
