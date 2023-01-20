@extends('layouts.layouts')


@section('main-content')
    <h1 class="text-center">Form per l'edit</h1>

    <form  class="text-light" method="POST" action="{{ route('comics.update' , $comics->id) }}">

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
    </form>
@endsection
