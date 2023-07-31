<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pipeline;

class Purpose extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pipelines() {
        return $this->hasMany(Pipeline::class);
    }
}
