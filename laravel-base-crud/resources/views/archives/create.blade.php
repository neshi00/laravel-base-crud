@extends('layouts.default')

@section('content')

<form action="{{ route("archives.store") }}" method="post">
    @csrf

    <div>
        <label for="title">Titolo</label>
        <input type="text" name="title" placeholder="scrivi il titolo">
    </div>

    <div>
        <label for="price">Prezzo</label>
        <input type="text" name="price" placeholder="scrivi il prezzo">
    </div>

    <div>
        <label for="series">Serie</label>
        <input type="text" name="series" placeholder="scrivi la serie">
    </div>

    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" placeholder="inserisci una descrizione"></textarea>
    </div>

    <input type="submit" value="invia">

</form>

@endsection

