<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;
// Define the role attribute in the model if needed
protected $attributes = [
    'role' => 'user',
];

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public function preferences()
    {
        return $this->hasMany(UserPreference::class);
    }
}