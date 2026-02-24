@extends('layouts.app')
@section('title', '{{ $cinema->nomCin }} - CineForAll')
@section('content')
<h2 class="section-title">{{ $cinema->nomCin }}</h2>
<div class="actor-container">
    <div class="actor-info">
        <p>📍 {{ $cinema->adrCin }}, {{ $cinema->vilCin }} {{ $cinema->cpCin }}</p>
    </div>
</div>
@endsection