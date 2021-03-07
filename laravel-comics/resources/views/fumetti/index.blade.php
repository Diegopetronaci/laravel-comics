

@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="comics_evidenza">
            <div class="bg_black d-flex">
                <div class="comics_esterno">
                    <h2>COMICS & GRAPHIC NOVELS</h2>
                </div>
                <div class="links_time">
                    <a href="#">THIS WEEK</a>
                    <a href="#">LAST WEEK</a>
                    <a href="#">NEXT WEEK</a>
                    <a href="#">UPCOMING</a>
                    <a href="#">SEE ALL</a>
                </div>
                
                @foreach ($fumetti as $fumetto)
                
                <div>
                    <a href="{{ route('comic', $fumetto) }}">
                        <p>COMIC BOOK</p>
                        {{-- <img src="{{asset('storage/'.$fumetto->copertina)}}" alt=""> --}}
                        <img src=" {{$fumetto->copertina}} " alt="">
                    </a>
                    <div><td>{{ $fumetto->titolo }} </td></div>
                    {{-- <div>AVAILBLE NOW</div> --}}
                    <span>
                        @if($fumetto->disponibile === 1)
                            Disponibile
    
                            @else
                                Non Disponibile
                        @endif
                    </span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <h2 class="h2_main2">MUST READS</h2>
    <div class="main_2 d_flex">

        <div class="must_reads_container d_flex_column">
            <div>
                <img src=" {{asset('img/batman_cat.jpg')}} " alt="">
                <h6>GET THE INSIDE TRACK ON ALL THINGS DC</h6>
                <h5>DC CONNECT</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="must_reads_container d_flex_column">
            <div>
                <img src=" {{asset('img/SandmanUniverse.jpg')}} " alt="">
                <h6>FROM THE MIND OF NEIL GAIMAN</h6>
                <h5>THE SANDMAN UNIVERSE</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="must_reads_container d_flex_column">
            <div>
                <img src=" {{asset('img/wondercomics.jpg')}} " alt="">
                <h6>THESE KIDS ALL FIGHT!</h6>
                <h5>WONDER COMICS</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

    <div class="main_3 bg_black">
        <div class="comics_esterno">
            <h2>CURRENT SERIES</h2>
        </div>

        <div class="d-flex d_wrap series">
            <div>
                <img src=" {{asset('img/american_vampire.jpg')}} " alt="">
                <p>AMERICAN VAMPIRE 1976</p>
            </div>
            <div>
                <img src=" {{asset('img/batman.jpg')}} " alt="">
                <p>BATMAN</p>
            </div>
            <div>
                <img src=" {{asset('img/batman_black_&_white.jpg')}} " alt="">
                <p>BATMAN BLACK & WHITE</p>
            </div>
            <div>
                <img src=" {{asset('img/batman_vs_rasalgul.jpg')}} " alt="">
                <p>BATMAN VS RASALGUL</p>
            </div>
            <div>
                <img src=" {{asset('img/batman_catwoman.jpg')}} " alt="">
                <p>BATMAN/CATWOMAN</p>
            </div>
            <div>
                <img src=" {{asset('img/batman_urban_legends.jpg')}} " alt="">
                <p>BATMAN URBAN LEGENDS</p>
            </div>
            <div>
                <img src=" {{asset('img/batman_queen.jpg')}} " alt="">
                <p>BATMAN AND HARLEY QUEEN</p>
            </div>
            <div>
                <img src=" {{asset('img/catwoman.jpg')}} " alt="">
                <p>CATWOMAN</p>
            </div>
            <div>
                <img src=" {{asset('img/crime_syindacate.jpg')}} " alt="">
                <p>CRIME SYNDACATE</p>
            </div>
            <div>
                <img src=" {{asset('img/dc_connect.jpg')}} " alt="">
                <p>DC CONNECT</p>
            </div>
            <div>
                <img src=" {{asset('img/dc_love.jpg')}} " alt="">
                <p>DC LOVE</p>
            </div>
            <div>
                <img src=" {{asset('img/far_sector.jpg')}} " alt="">
                <p>FAR SECTOR</p>
            </div>
        </div>
    </div>

@endsection