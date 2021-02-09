@extends('layouts.app')

@section('header')
    <header class="flex justify-between items-center px-10 py-6">
        <div class="block">
            <h1 class="text-4xl text-gray-700">{{ __('Dashboard') }}</h1>
        </div>
        <div class="block">
            <a href="" class="v-button button-success">Reload</a>
        </div>
    </header>
@endsection

@section('content')
    <main class="bg-white p-6 shadow-lg rounded-lg">
        Dashboard
    </main>
@endsection
