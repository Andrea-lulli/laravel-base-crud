@extends('layouts.layouts')

@section('main-content')
    <div class="box-card text-center p-3 w-25 "  >

        @foreach ($comics as $elem)


            <div class="card">
                 <a href="{{ route('comics.show' , $elem->id)}}">
                <div>

                </div><img src="{{$elem['thumb']}}" alt="">
                <p class="title">{{ $elem['title'] }}</p>
            </a>
            </div>

        @endforeach

    </div>
@endsection
