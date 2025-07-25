<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = ['name'];

    /**
     * Utilisateurs ayant ce rôle
     */

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
