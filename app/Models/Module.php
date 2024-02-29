<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public function stagiaires()
{
    return $this->belongsToMany(Stagiaire::class, 'notes', 'module_id', 'stagiaire_id')
                ->withPivot('grade')
                ->withTimestamps();
}

}
