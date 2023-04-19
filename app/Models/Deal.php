<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Stage;

class Deal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'followers');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class)->withPivot('is_primary');
    }

    public function primaryContact()
    {
        return $this->belongsToMany(Contact::class)->withPivot('is_primary')->wherePivot('is_primary', 1);
    }
}