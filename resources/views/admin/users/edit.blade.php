@extends('layouts.app')

@section('content')
  <header class="flex justify-between items-center px-10 py-5 bg-white">
    <div>
      <h1 class="text-4xl">Update A User</h1>
    </div>
    <div>
      <a href="{{ route('users.index') }}" class="v-button button-success">Return</a>
    </div>
  </header>
@endsection
