@extends('layouts.default')

@section('content')

<h1>Archivio fumetti</h1>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Series</th>
        </tr>
    </thead>


    <tbody>

        @foreach($data as $archive)
        <tr>
            <td>{{ $archive->title }}</td>
            <td>{{ $archive->description }}</td>
            <td>{{ $archive->price }}</td>
            <td>{{ $archive->series }}</td>

            <td><a href="{{ route("archives.edit", $archive->id) }}">Modifica</a></td>
        </tr>
            
        @endforeach



    </tbody>
</table>

@endsection