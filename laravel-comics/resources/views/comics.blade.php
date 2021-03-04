@extends('app')

@section('content')
    <div class="main">
        <div class="comics_evidenza">
            <div class="bg_black d-flex">
                <div class="comics_esterno">
                    <h2>COMICS & GRAPHIC NOVELS</h2>
                </div>
                <div class="links_time">
                    <a href="">THIS WEEK</a>
                    <a href="">LAST WEEK</a>
                    <a href="">NEXT WEEK</a>
                    <a href="">UPCOMING</a>
                    <a href="">SEE ALL</a>
                </div>
                <div>
                    <a href="{{ route('fumetto') }}"><img src=" {{asset('img/batman_106.jpg')}} " alt=""></a>
                    <div><td>Batman #106</td></div>
                    <div><link rel="stylesheet" href="#">AVAILBLE NOW</div>
                </div>
                <div>
                    <img src=" {{asset('img/Crime_syn.jpg')}} " alt="">
                    <div><td>CRIME SYNDACATE #1</td></div>
                    <div><link rel="stylesheet" href="#">AVAILBLE NOW</div>
                </div>
                <div>
                    <img src=" {{asset('img/frontier.jpg')}} " alt="">
                    <div><td>INFINITE FRONTIER #0</td></div>
                    <div><link rel="stylesheet" href="#">AVAILBLE NOW</div>
                </div>
                <div>
                    <img src=" {{asset('img/manbat.jpg')}} " alt="">
                    <div><td>MAN-BAT #2</td></div>
                    <div><link rel="stylesheet" href="#">AVAILBLE NOW</div>
                </div>
                <div>
                    <img src=" {{asset('img/sensational.jpg')}} " alt="">
                    <div><td>SENSATIONAL WONDER WOMAN #9</td></div>
                    <div><link rel="stylesheet" href="#">AVAILBLE NOW</div>
                </div>

                {{-- @foreach ($comics as $comic)
                    <h1> {{ $comic->titolo }} </h1>
                @endforeach --}}
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

    <div class="main_4">
        <div class="d-flex space_between container">
            <div class="d-flex">
                <i class="fas fa-podcast"></i>
                <p>DIGITAL COMICS</p>
            </div>
            <div class="d-flex">
                <i class="fas fa-podcast"></i>
                <p>DIGITAL COMICS</p>
            </div>
            <div class="d-flex">
                <i class="fas fa-podcast"></i>
                <p>DIGITAL COMICS</p>
            </div>
            <div class="d-flex">
                <i class="fas fa-podcast"></i>
                <p>DIGITAL COMICS</p>
            </div>
        </div>
    </div>
@endsection
