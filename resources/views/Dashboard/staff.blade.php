@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Dashboard Staff</h1>
    <div class="bg-white rounded-lg shadow p-6">
        <p>Halo <strong>{{ auth()->user()->name }}</strong>!</p>
        <p class="mt-2">Ini adalah dashboard Staff. Kamu dapat melihat task yang ditugaskan dan mengupdate statusnya.</p>
    </div>
</div>
@endsection
