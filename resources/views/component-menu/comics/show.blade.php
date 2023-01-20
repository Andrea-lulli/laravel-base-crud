@extends('layouts.layouts')

@section('title-page')
    Comic
@endsection



@section('main-content')
    <div class="box-singolo">
        <div class="card-singole">
            <div>
                <img src="{{ $elem['thumb'] }}" alt="">
            </div>

            <p class="title-singole">{{ $elem['title'] }}</p>

            <p class="title-singole">Decscrizione: {{ $elem['description'] }}</p>

            <p class="text-light">
                Tipo: {{ $elem->type }}
            </p>

            <p class="text-light">
                Tipo: {{ $elem->series }}
            </p>

            <p class="text-light">
                Data di uscita: {{ $elem->sale_date }}
            </p>

            <p class="text-light">
                Prezzo: {{ $elem->price }}
            </p>


        </div>


        <a href="{{ route('comics.index') }}">&#x21A9</a>
    </div>
@endsection
