<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Member extends Model
{
    use HasFactory;

    public function team() {
        return $this->belongsToMany(Team::class);
    }
}
