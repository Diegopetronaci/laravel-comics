<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    protected $fillable = [
        'titolo',
        'descrizione',
        'slug',
        'copertina',
        'disponibile',
        'artista',
        'scrittore',
        'serie',
        'prezzo',
        'rilasciato_il',
        'volume',
        'formato',
        'numero_pagine',
        'targhet',
    ];

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
