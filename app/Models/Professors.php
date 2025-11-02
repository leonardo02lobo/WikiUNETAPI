<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professors extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo'
    ];

    public function subjectProfessors()
    {
        return $this->hasMany(SubjectProfessor::class);
    }
}
