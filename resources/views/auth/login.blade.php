@extends('layouts.guest')

@section('content')

  <v-auth-card title="{{ __('Login') }}">
    <form action="{{ route('login') }}" method="post">
      @csrf
      <v-input id="email" type="email" name="email" label="{{ __('Email Address') }}" placeholder="{{ __('Email Address') }}" errors="@error('email') border-red-500 @enderror">
        @error('email')
          <v-input-error>{{ $message }}</v-input-error>
        @enderror
      </v-input>
      <v-input id="password" type="password" name="password" label="{{ __('Password') }}" placeholder="{{ __('Password') }}" errors="@error('password') border-red-500 @enderror">
        @error('password')
          <v-input-error>{{ $message }}</v-input-error>
        @enderror
      </v-input>
      <button class="v-button button-default mt-3">{{ __('Login') }}</button>
    </form>
  </v-auth-card>

@endsection
