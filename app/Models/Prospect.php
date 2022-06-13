<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function prospectContact()
    {
        return $this->hasMany(ProspectContact::class);
    }
}
