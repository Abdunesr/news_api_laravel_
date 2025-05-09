<?php

namespace App\Models;

use Jenssegers\Mongodb\Auth\User as Authenticatable; // Use MongoDB Auth Model
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];// Migration
    // Removed invalid code from the model class
    

    public function preferences()
    {
        return $this->hasMany(UserPreference::class);
    }
}
