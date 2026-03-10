@extends('layouts.app')
@section('title', '{{ $cineaste->preCineaste }} {{ $cineaste->nomCineaste }} - CineForAll')
@section('content')
    <h2 class="section-title">{{ $cineaste->preCineaste }} {{ $cineaste->nomCineaste }}</h2>
    <div class="actor-container">
        <div class="actor-image">
            <img src="{{ asset('imgCineaste/' . $cineaste->imgCineaste) }}" alt="{{ $cineaste->nomCineaste }}">
        </div>
        <div class="actor-info">
            <h3>{{ $cineaste->preCineaste }} {{ $cineaste->nomCineaste }}</h3>
            <ul>
                <li><strong>Nationalité :</strong> {{ $cineaste->natCineaste }}</li>
                <li><strong>Date de naissance :</strong> {{ $cineaste->datNaiCineaste }}</li>
                <li><strong>Biographie :</strong> {{ $cineaste->bioCineaste }}</li>
            </ul>
            <a href="/cineastes" style="display: inline-block; margin-top: 20px; color: #991917; font-family: 'Orbitron', sans-serif; font-size: 13px;">Retour aux cinéastes</a>
        </div>
    </div>
@endsection
