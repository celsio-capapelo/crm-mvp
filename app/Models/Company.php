<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deal;
use App\Models\Contact;

class Company extends Model
{
    use HasFactory;

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

}
