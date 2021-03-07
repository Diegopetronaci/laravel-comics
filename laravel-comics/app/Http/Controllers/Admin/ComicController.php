<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fumetti = Comic::all();
        return view('admin.comics.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /* $comic = new Comic;
        $comic->title = request('titolo');
        $comic->body = request('descrizione');
        $comic->body = request('disponibile');
        $comic->body = request('artista');
        $comic->body = request('scrittore');
        $comic->body = request('serie');
        $comic->body = request('prezzo');
        $comic->body = request('Rilasciato_il');
        $comic->body = request('volume');
        $comic->body = request('rilasciato_il');
        $comic->save(); */

        /* dd($request); */
        $request['slug'] = Str::slug($request->titolo);
        $data = $request->validate([
            'titolo' => 'required',
            'descrizione' => 'nullable',
            'slug' => 'required',
            'copertina' => 'mimes:jpg,png,jpeg | nullable | max:1000',
            'disponibile' => 'nullable',
            'artista' => 'nullable',
            'scrittore' => 'nullable',
            'serie' => 'nullable',
            'prezzo' => 'required',
            'rilasciato_il' => 'nullable',
            'volume' => 'nullable',
            'formato' => 'nullable',
            'numero_pagine' => 'nullable',
            'targhet' => 'nullable',
        ]);

        if ($request->copertina) {
            $copertina = Storage::disk('public')->put('comics_img', $request->copertina);
            $data['copertina'] = $copertina;
        };
        /* dd($request); */

        /* Comic::create($data);
        $comic = Comic::All(); */

        /* return back(); */
        /* return redirect()->route('admin.comics.index', $comic); */

        Comic::create($data);
        $fumetto = Comic::orderby('id', 'desc')->first();
        return view('admin.comics.show', compact('fumetto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        $fumetto = $comic;
        return view('admin.comics.show', compact('fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return redirect()->route('admin.comics.index');
    }
}
