@extends('layouts.app')
@section('title', 'Cinéastes - CineForAll')
@section('content')
<h2 class="section-title">Nos Cinéastes</h2>
<section class="content-simple">
    @foreach($cineastes as $cineaste)
    <div class="movie-card">
        <h3>{{ $cineaste->preCineaste }} {{ $cineaste->nomCineaste }}</h3>
        <p>{{ $cineaste->natCineaste }}</p>
        <p>{{ $cineaste->bioCineaste }}</p>
    </div>
    @endforeach
</section>
@endsection