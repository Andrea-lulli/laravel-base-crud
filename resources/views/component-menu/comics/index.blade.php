@extends('layouts.layouts')

@section('main-content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="box-card text-center p-3 w-25 ">

        @foreach ($comics as $elem)
            <div class="card">
                <a href="{{ route('comics.show', $elem->id) }}">
                    <div>

                    </div><img src="{{ $elem['thumb'] }}" alt="">
                    <p class="title">{{ $elem['title'] }}</p>
                </a>
                <form action="{{ route('comics.destroy', $elem->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-dark" type="submit">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </form>
            </div>
        @endforeach

    </div>
@endsection
