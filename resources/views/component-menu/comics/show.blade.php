@extends('layouts.layouts')



@section('main-content')
    <div class="box-singolo">
        <div class="card-singole">
            <div>
                <img src="{{$elem['thumb']}}" alt="">
            </div>

            <p class="title-singole">{{ $elem['title'] }}</p>

            <p class="title-singole">Decscrizione: {{ $elem['description'] }}</p>


        </div>
        <p >
            PREZZO: {{$elem->price}}
        </p>

        <a href="{{ route('home')}}">&#x21A9</a>
    </div>
@endsection
