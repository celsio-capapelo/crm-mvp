<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Deal;
use App\Models\Stage;

class DealController extends Controller
{
    public function index()
    {
        // info(Deal::first()->primaryContact->first());
        // info(Deal::with('primaryContact'));
        return Inertia::render('Deals/Index', [
            'deals' => Deal::with(['stage', 'company', 'primaryContact', 'owner', 'activities'])->get(),
            'stages' => Stage::all()
        ]);
    }

    public function update(Request $request, Deal $deal) {
        $deal->update(['stage_id' => $request->stageId]);
        return response()->json(['success'=>'Deal stage updated.']);

    }
}
