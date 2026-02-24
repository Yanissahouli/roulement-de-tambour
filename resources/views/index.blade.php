@extends('layouts.app')

@section('title', 'CineForAll')

@section('content')

<h2 class="section-title">Dernières sorties</h2>

<section class="movies">

    <div class="movie-card">
        <img src="{{ asset('img/will_hunting.webp') }}" alt="Will Hunting">
        <div class="rating">⭐ 8,4/10</div>
        <div class="duration">🕒 120 min</div>
    </div>

    <div class="movie-card">
        <img src="{{ asset('img/the_hunt.webp') }}" alt="The Hunt">
        <div class="rating">⭐ 8,4/10</div>
        <div class="duration">🕒 120 min</div>
    </div>

    <div class="movie-card">
        <img src="{{ asset('img/Terminator_2.webp') }}" alt="Terminator 2">
        <div class="rating">⭐ 8,4/10</div>
        <div class="duration">🕒 120 min</div>
    </div>

</section>

@endsection
