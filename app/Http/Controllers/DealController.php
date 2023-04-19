<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Deal;

class DealController extends Controller
{
    public function index()
    {
        // info(Deal::first()->primaryContact->first());
        // info(Deal::with('primaryContact'));
        return Inertia::render('Deals/Index', [
            'deals' => Deal::with(['stage', 'company', 'primaryContact'])->get(),
            'text' => 'hello world'
        ]);
    }
}
