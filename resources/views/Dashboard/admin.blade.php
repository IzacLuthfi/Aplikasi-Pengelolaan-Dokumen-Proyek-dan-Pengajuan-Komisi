@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Dashboard Admin</h1>
    <div class="bg-white rounded-lg shadow p-6">
        <p>Selamat datang, <strong>{{ auth()->user()->name }}</strong>!</p>
        <p class="mt-2">Ini adalah halaman dashboard untuk Admin. Di sini kamu bisa mengelola data user, role, dan akses sistem.</p>
    </div>
</div>
@endsection
