<?php
{{-- resources/views/cinemas/index.blade.php --}}

@extends('layouts.app') {{-- si tu as un layout principal --}}

@section('content')
    <div class="container">
        <h1>Liste des cinémas proposant ce film</h1>

        @if($cinemas->isEmpty())
            <p>Aucun cinéma ne propose ce film pour le moment.</p>
        @else
            <ul>
                @foreach($cinemas as $cinema)
                    <li>
                        <h2>{{ $cinema->name }}</h2>
                        <p>{{ $cinema->address }}</p>

                        <h3>Séances disponibles :</h3>
                        <ul>
                            @foreach($cinema->seances->where('film_id', request()->query('film_id')) as $seance)
                                <li>
                                    {{ \Carbon\Carbon::parse($seance->start_time)->format('d/m/Y H:i') }}
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection