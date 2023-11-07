<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable = [
        'nome',
        'email',
    ];

    protected $with = ['enderecos'];

    public function enderecos()
    {
        return $this->hasMany(Enderecos::class);
    }
}
