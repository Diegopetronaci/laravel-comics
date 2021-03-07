@extends('layouts.app')

@section('content')

    {{-- <div class="container"> --}}
        {{-- <img src="{{asset('storage/' . $fumetto->copertina )}}" alt=""> --}}
        {{-- <img src="{{ $fumetto->copertina }}" alt="">
        <h1> {{$fumetto->titolo}} </h1>
        <p> {{$fumetto->descrizione}} </p>
    </div> --}}

    <div class="show_img">
        <img id="immagine_sfondo_show" src="{{ $fumetto->copertina }}" alt="">
    </div>

    <div class="fascia_blue">
        <div>
            <img src="{{ $fumetto->copertina }}" alt="">
            <p>COMIC BOOK</p>
        </div>
    </div>
    
    <div class="info_shop">
        

        <div class="generl_info_container">
            <div class="info_box">
                <h1>{{$fumetto->titolo}}</h1>
                <div class="info_price">
                    <div class="left">
                        <span>U.S. Price: {{$fumetto->prezzo}}</span>
                        <span>
                            @if($fumetto->disponibile === 1)
                                Avaiable
        
                                @else
                                    Not Avaiable
                            @endif
                        </span>
                    </div>
                    <div class="right">
                        Buy Now
                    </div>
                </div>
                <p>{{$fumetto->descrizione}}</p>
            </div>

            <div class="contenitore d-flex">
                <div class="talent">
                    <h4>Talent</h4>
                    <ul>
                        <li> <p>Art by:</p> {{$fumetto->artista}}</li>
                        <li> <p>Written by:</p> {{$fumetto->scrittore}}</li>
                    </ul>
                </div>
                <div class="talent">
                    <h4>Specs</h4>
                    <ul>
                        <li> <p> Series: </p> {{$fumetto->serie}} </li>
                        <li> <p> U.S Price: </p> ${{$fumetto->prezzo}} </li>
                        <li> <p> On Sale Date: </p> {{$fumetto->rilasciato_il}} </li>
                        <li> <p> volume/Issue #: </p> {{$fumetto->volume}} </li>

                    </ul>
                </div>
            </div>
        </div>        

        
    </div>
@endsection