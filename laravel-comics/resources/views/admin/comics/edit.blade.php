@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit a new post</h1>
        
@if ($errors->any())   <div class="alert alert-danger">       <ul>           @foreach ($errors->all() as $error)           <li>{{ $error }}</li>           @endforeach       </ul>   </div>   <br />    @endif

        <form action=" {{route('admin.comics.update', $comic)}} " method="post" enctype="multipart/form-data">
            @csrf

            @method('patch')

            <div class="form">
                <label for="titolo">Titolo</label>
                <input class="form-control" type="text" name="titolo" id="titolo" value="{{$comic->titolo}}">
                @error('titolo')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="copertina">Carica una copertina</label>
                <input type="file" class="form-control-file" name="copertina" id="compertina" aria-describedby="fileHelpId">
                {{-- <small id="fileHelper" class="form-text text-muted">aggiungi un immagine di copertina</small> --}}
                @error('copertina')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form">
                <label for="descrizione">Descrizione</label>
                <input class="form-control" type="text" name="descrizione" id="descrizione" value="{{$comic->descrizione}}">
                @error('descrizione')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- avaiability --}}
            <div class="{{-- form-group --}} {{-- row --}}">
                <label for="disponibile" class="col-lg-12 col-form-label {{-- text-info --}}">Disponibilità</label>

                <div class="col-md-1">
                    <input type="radio" class="form-check-input" name="availability" value="1">
                    <label class="form-check-lable" for="disponibile">Disponibile</label>
                </div>
                <div class="col-md-2">
                    <input type="radio" class="form-check-input" name="availability" value="0">
                    <label class="form-check-lable" for="disponibile">Non Disponibile</label>
                </div>
            </div>

            <div class="form">
                <label for="artista">Artista</label>
                <input class="form-control" type="text" name="artista" id="artista" value="{{$comic->artista}}">
                @error('artista')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form">
                <label for="scrittore">Scrittore</label>
                <input class="form-control" type="text" name="scrittore" id="scrittore" value="{{$comic->scrittore}}">
                @error('scrittore')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form">
                <label for="serie">Serie</label>
                <input class="form-control" type="text" name="serie" id="serie" value="{{$comic->serie}}">
                @error('serie')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form">
                <label for="prezzo">Prezzo</label>
                <input class="form-control" type="text" name="prezzo" id="prezzo" value="{{$comic->prezzo}}">
                @error('prezzo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- <div class="form">
                <label for="Rilasciato_il">Data di rilascio</label>
                <input class="form-control" type="text" name="Rilasciato_il" id="Rilasciato_il">
                @error('Rilasciato_il')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> --}}
            
            <div class="form">
                <label for="volume">Volume</label>
                <input class="form-control" type="text" name="volume" id="volume" value="{{$comic->volume}}">
                @error('volume')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form">
                <label for="rilasciato_il">Data di Pubblicazione</label>
                <div>
                    <input type="date" class="form-control" name="rilasciato_il" id="rilasciato_il" value="{{$comic->rilasciato_il}}">
                </div>
                @error('rilasciato_il')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form">
                <label for="formato">formato</label>
                <input class="form-control" type="text" name="formato" id="formato" value="{{$comic->formato}}">
                @error('formato')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form">
                <label for="numero_pagine">Numero di pagine</label>
                <input class="form-control" type="text" name="numero_pagine" id="numero_pagine" value="{{$comic->numero_pagine}}">
                @error('numero_pagine')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form">
                <label for="targhet">Targhet</label>
                <input class="form-control" type="text" name="targhet" id="targhet" value="{{$comic->targhet}}">
                @error('targhet')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" value="Create" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection