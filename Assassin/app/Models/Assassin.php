<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assassin extends Model
{
    /** @use HasFactory<\Database\Factories\AssassinFactory> */
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'codename',
        'description',
        'age',
        'skill',
        'weapon_id',
    ];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }
}
