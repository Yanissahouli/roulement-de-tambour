@extends('layouts.app')
@section('title', 'Utilisateurs - CineForAll')
@section('content')
<h2 class="section-title">Utilisateurs</h2>
<section class="content-simple">
    @foreach($users as $user)
    <div class="movie-card">
        <h3>{{ $user->name }}</h3>
        <p>{{ $user->email }}</p>
    </div>
    @endforeach
</section>
@endsection