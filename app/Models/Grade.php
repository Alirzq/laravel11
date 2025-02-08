<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    use HasFactory;

    protected $with = ['departement'];

    protected $fillable = [
        'name',
        'departement_id',
        // Tambahkan atribut lain yang diperlukan
    ];
    //mangambil data dari tabel student
    //menggunakan relasi one to many
    //melalui model student
    public function students() : HasMany
       //relationship
    {
        return $this->hasMany(student::class);
        //models student
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
