@extends('layouts.layouts')

@section('title-page')
Comics- Edit
@endsection


@section('main-content')
    <h1 class="text-center text-light">Form per l'edit</h1>

    <div class="d-flex justify-content-center">
        <form  class="text-light w-50" method="POST" action="{{ route('comics.update' , $comics->id) }}">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input value="{{ $comics->title }}"  name="title" type="text" class="form-control" id="title">
            </div>

            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" class="form-control" id="">
                    {{ $comics->description }}
                </textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input value="{{ $comics->price }}" name="price" type="text" class="form-control" id="price">
            </div>

            <div class="mb-3">
                <label class="form-label">immagine</label>
                <input value="{{ $comics->thumb }}" name="thumb" type="text" class="form-control" id="thumb">
            </div>

            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input value="{{ $comics->series }}" name="series" type="text" class="form-control" id="series">
            </div>

            <div class="mb-3">
                <label class="form-label">data</label>
                <input value="{{ $comics->sale_date }}" name="sale_date" type="text" class="form-control" id="sale_date">
            </div>

            <div class="mb-3">
                <label class="form-label">tipo</label>
                <input value="{{ $comics->type }}" name="type" type="text" class="form-control" id="type">
            </div>

            <button type="submit" class="btn btn-primary">Modifica record</button>
            <a href="{{route('comics.index')}}">
                <button type="submit" class="btn btn-primary">Indietro</button>
            </a>
        </form>

    </div>


@endsection
