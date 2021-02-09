@extends('layouts.guest')

@section('content')

  <v-auth-card title="{{ __('Register') }}">
    <form action="{{ route('register') }}" method="post">
      @csrf
      <v-input id="name" type="text" name="name" label="{{ __('Name') }}" placeholder="{{ __('Name') }}" errors="@error('name') border-red-500 @enderror">
        @error('name')
          <v-input-error>{{ $message }}</v-input-error>
        @enderror
      </v-input>
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
      <v-input id="password-confirm" type="password" name="password_confirmation" label="{{ __('Confirm Password') }}" placeholder="{{ __('Confirm Password') }}" errors="@error('password_confirmation') border-red-500 @enderror"></v-input>
      <button class="v-button button-default mt-3">{{ __('Register') }}</button>
    </form>
  </v-auth-card>

@endsection
