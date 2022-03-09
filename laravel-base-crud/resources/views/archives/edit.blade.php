@extends('layouts.default')

@section('content')

<form action="{{ route("archives.update", $archive->id) }}" method="post">
    @csrf

    @method("put")

    <div>
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" placeholder="scrivi il titolo" value="{{ $archive->title }}">
    </div>

    <div>
        <label for="price">Prezzo</label>
        <input type="text" name="price" id="price" placeholder="scrivi il prezzo" value="{{ $archive->price }}">
    </div>

    <div>
        <label for="series">Serie</label>
        <input type="text" name="series" id="series" placeholder="scrivi la serie" value="{{ $archive->series }}">
    </div>

    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" id="description" placeholder="inserisci una descrizione">{{ $archive->description }}</textarea>
    </div>

    <input type="submit" value="invia">

</form>

@endsection