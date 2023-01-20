@extends('layouts.layouts')

@section('title-page')
Comics- Create
@endsection


@section('main-content')
    <h1 class="text-center text-light">Form per la Create</h1>



    <a href="{{ route('comics.index') }}">
        <button type="submit" class="btn btn-primary">Indietro</button>
    </a>

    @if ($errors->any())
        <div class="alert alert-danger my-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="d-flex justify-content-center ">
        <form class="text-light w-50" method="POST" action="{{ route('comics.store') }}">

            @csrf

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input name="title" type="text" class="form-control" id="title">
            </div>

            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" class="form-control" id=""></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input name="price" type="text" class="form-control" id="price">
            </div>

            <div class="mb-3">
                <label class="form-label">immagine</label>
                <input name="thumb" type="text" class="form-control" id="thumb">
            </div>

            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input name="series" type="text" class="form-control" id="series">
            </div>

            <div class="mb-3">
                <label class="form-label">data</label>
                <input name="sale_date" type="text" class="form-control" id="sale_date">
            </div>

            <div class="mb-3">
                <label class="form-label">tipo</label>
                <input name="type" type="text" class="form-control" id="type">
            </div>

            <button type="submit" class="btn btn-primary">Crea record</button>

        </form>


    </div>


@endsection
