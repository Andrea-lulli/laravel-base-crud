@extends('layouts.layouts')

@section('main-content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="box-card text-center p-3 ">

        @foreach ($comics as $elem)
            <div class="card">
                <a href="{{ route('comics.show', $elem->id) }}">
                    <div>

                    </div><img src="{{ $elem['thumb'] }}" alt="">
                    <p class="title">{{ $elem['title'] }}</p>
                </a>
                <div class="d-flex justify-content-center">
                    <form class="mx-2" action="{{ route('comics.destroy', $elem->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-dark" type="submit">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </form>
                    <div class="mx-2">
                        <a href="{{route('comics.edit', $elem->id)}}">
                             <i class="fa-solid fa-pen"></i>
                        </a>
                    </div>

                </div>

            </div>
        @endforeach

    </div>
@endsection
