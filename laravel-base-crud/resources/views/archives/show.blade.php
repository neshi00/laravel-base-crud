@extends('layouts.default')

@section('content')

<h1>Dettagli fumetto #{{ $archive->id }}</h1>

<h1>Titolo: {{ $archive->title }}</h1>
<h3>Prezzo: {{ $archive->price }}</h3>
<p>Descrizione: {{ $archive->description }}</p>
<p>Serie: {{ $archive->series }}</p>


@endsection