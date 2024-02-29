<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagaire extends Model
{
    public function Filiere (){
        return $this->belongsTo(Filliere::class);
    }
    use HasFactory;

    public function modules()
{
    return $this->belongsToMany(Module::class, 'notes', 'stagiaire_id', 'module_id')
                ->withPivot('grade')
                ->withTimestamps();
}
}
