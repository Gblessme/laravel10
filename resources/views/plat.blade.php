@extends('base')

@section('content')
<section>
    <img src="{{ asset('Image/' . $plat->fichier) }}" alt="{{ $plat->titre }}" />

    <h2>{{ $plat->nom }}</h2>
    <span class="prix">9,99 eur</span>
    <a href="pagepizza1.html"> {{ $plat->prix }}</a>
    @foreach ($plat->etiquettes() as $etiquette)
     <li>{{$etiquette->nom}}</li>
    @endforeach
</ul>
</section>
@endsection