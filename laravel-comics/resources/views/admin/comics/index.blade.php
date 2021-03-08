@extends('layouts.app')

@section('content')
    <h1>Tutti i fumetti</h1>

    <div class="list-group">
        <a class="list-group-item active text-center" href=" {{route('admin.comics.create')}} ">Pubblica un nuovo fumetto</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Comic ID</th>
                <th>Titolo</th>
                <th>Artista</th>
                <th>Scrittore</th>
                <th>Prezzo</th>
                <th>Rilasciato il</th>
                <th>Disponibilità</th>
                <th>Opzioni</th>
                <th>Elimina</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fumetti as $fumetto)
                
            <tr>
                <td scope="row"> {{$fumetto->id}} </td>
                <td> {{$fumetto->titolo}} </td>
                <td> {{$fumetto->artista}} </td>
                <td> {{$fumetto->scrittore}} </td>
                <td> {{$fumetto->prezzo}} </td>
                <td> {{$fumetto->rilasciato_il}} </td>
                <td>
                    @if($fumetto->disponibile === 1)
                        disponibile
                        @else
                        non disponbile
                    @endif
                </td>
            
            
                <td>
                    <div class="dropdown open">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            opzioni
                        </button>
                        <div class="dropdown-menu" aria-labelledby="triggerId">
                            <a class="dropdown-item" href="{{ route('admin.comics.show', $fumetto) }}">Mostra</a>
                            <a class="dropdown-item" href="{{ route('admin.comics.edit', $fumetto) }}">Modifica</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="{{route('admin.comics.destroy', $fumetto->slug )}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn {{-- btn-success --}} btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection