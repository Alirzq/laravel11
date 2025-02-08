<?php

namespace App\Models;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $with = ['grade','departement'];

    protected $fillable = [
        'name',
        'email',
        'address',
        'grade_id',
        'departement_id',
        // Tambahkan atribut lain yang diperlukan
    ];

        public function grade() : BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }
    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }
    //function joun
}
