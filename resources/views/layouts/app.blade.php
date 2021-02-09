<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="flex h-screen bg-gray-200">
      <aside class="w-64 bg-white shadow-2xl">
        <a href="" class="block py-4 px-4 text-4xl">Keen</a>
          <div class="block py-3">
              <h4 class="block text-xs text-gray-400 font-light px-4">General</h4>
              <nav class="block mt-3">
                  <a href="" class="block py-2 px-4 font-light">Dashboard</a>
                  <a href="{{ route('users.index') }}" class="block py-2 px-4 font-light">Users</a>
              </nav>
          </div>
      </aside>
      <main class="flex-1">
        <nav class="flex justify-between items-center bg-gray-800 px-10 py-2">
          <div>
            <form action="">
              <label for="search" class="hidden">Search</label>
              <input type="search" id="search" class="block px-4 py-2 rounded-lg focus:outline-none font-light" placeholder="Search ..">
            </form>
          </div>
          <div>
            <v-dropdown heading="{{ Auth::user()->name }}">
              <a href="" class="block py-2 px-4 font-light">Logout</a>
            </v-dropdown>
          </div>
        </nav>
          @yield('header')
        <div class="px-10">
            @yield('content')
        </div>
      </main>
    </div>
</body>
</html>
