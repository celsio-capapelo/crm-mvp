<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deal;

class Stage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function deals() {
        return $this->hasMany(Deal::class);
    }
    
}


