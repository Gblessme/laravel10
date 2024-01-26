@extends('base')

@section('title', 'Accueil')

@section('content')
<h1>hello laravel<h1>

<ul>

@foreach ($actus as $actu)
<li> {{$actu->contenu}} ({{$actu->date_publication}}) </li>

@endforeach
</ul>
@endsection