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
        <form action="{{ route('users.store') }}" method="post">
            @csrf

            <div class="grid grid-cols-2 gap-3">
                <v-input id="first_name" type="text" name="first_name" label="First Name" placeholder="Enter a First Name">
                    @error('first_name')
                    <v-input-error>{{ $message }}</v-input-error>
                    @enderror
                </v-input>
                <v-input id="last_name" type="text" name="last_name" label="Last Name" placeholder="Enter a Last Name">
                    @error('last_name')
                    <v-input-error>{{ $message }}</v-input-error>
                    @enderror
                </v-input>
            </div>

            <v-input id="name" type="text" name="name" label="Name" placeholder="Enter a Name">
                @error('name')
                <v-input-error>{{ $message }}</v-input-error>
                @enderror
            </v-input>

            <v-input id="about" type="text" name="about" label="About" placeholder="Enter an About">
                @error('about')
                <v-input-error>{{ $message }}</v-input-error>
                @enderror
            </v-input>

            <v-input id="email" type="email" name="email" label="Email Address" placeholder="Enter an Email Address">
                @error('email')
                <v-input-error>{{ $message }}</v-input-error>
                @enderror
            </v-input>

            <v-input id="password" type="password" name="password" label="Password" placeholder="Enter a Password">
                @error('password')
                <v-input-error>{{ $message }}</v-input-error>
                @enderror
            </v-input>

            <button class="v-button button-default">Create New User</button>

        </form>
    </main>
@endsection
