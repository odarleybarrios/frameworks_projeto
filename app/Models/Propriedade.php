<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    use HasFactory;

    protected $table = 'propriedades';

    protected $fillable = ['rua'];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }
}
