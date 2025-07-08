@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Dashboard Project Manager</h1>
    <div class="bg-white rounded-lg shadow p-6">
        <p>Halo <strong>{{ auth()->user()->name }}</strong>!</p>
        <p class="mt-2">Ini adalah dashboard PM. Kamu dapat melihat status proyek, mengatur tim, dan memantau progres.</p>
    </div>
</div>
@endsection
