<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    /** @use HasFactory<\Database\Factories\WeaponFactory> */
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "lethality",
        "weight",
    ];

    public function assassins()
    {
        return $this->hasMany(Assassin::class);
    }
}
