<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deal;

class Follower extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function deals()
    // {
    //     return $this->belongsToMany(Deal::class)->withPivot('is_owner');
    // }
}
