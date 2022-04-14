<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pessoa extends Model
{
    //
    protected $table ='pessoas';
    protected  $fillable = [
        'nome', 'sobrenome', 'idade', 'altura', 'sexo','foto',
    ];
}
