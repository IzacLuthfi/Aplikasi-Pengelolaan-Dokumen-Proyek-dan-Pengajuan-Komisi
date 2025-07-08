@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Dashboard Head of Department</h1>
    <div class="bg-white rounded-lg shadow p-6">
        <p>Hai <strong>{{ auth()->user()->name }}</strong>!</p>
        <p class="mt-2">Ini adalah halaman HOD. Di sini kamu bisa mengevaluasi performa tim dan memberikan approval.</p>
    </div>
</div>
@endsection
