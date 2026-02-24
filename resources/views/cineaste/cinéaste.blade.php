@extends('layouts.app')

@section('title', 'CineForAll - Acteur')

@section('content')

<h2 class="section-title">Fiche Acteur</h2>

<section class="actor-container">

    <div class="actor-image">
        <img src="{{ asset('img/vin_diesel.webp') }}" alt="Vin Diesel">
    </div>

    <div class="actor-info">
        <h3>Vin Diesel</h3>

        <ul>
            <li><strong>Nom complet :</strong> Mark Sinclair</li>
            <li><strong>Date de naissance :</strong> 18 juillet 1967</li>
            <li><strong>Nationalité :</strong> Américaine</li>
            <li><strong>Profession :</strong> Acteur, Producteur</li>
            <li><strong>Films connus :</strong> Fast & Furious, xXx, The Chronicles of Riddick</li>
        </ul>

        <p style="margin-top:20px;">
            Vin Diesel est célèbre pour son rôle de Dominic Toretto dans la saga Fast & Furious.
        </p>
    </div>

</section>

@endsection
