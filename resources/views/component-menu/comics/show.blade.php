@extends('layouts.layouts')


@section('main-content')
<div class="text-center">
    <img src="{{$elem['thumb']}}" alt="">
</div>
    <h5 class="text-center">{{$elem->title}}</h5>
    <div>
        <p class="text-center">
            PREZZO: {{$elem->price}}
        </p>
    </div>

@endsection
