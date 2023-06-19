<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deal;

class Activity extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function deals()
    {
        return $this->belongsToMany(Deal::class)->withPivot('schedule', 'comment', 'completed_at');
    }
}
