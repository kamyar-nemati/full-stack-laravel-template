<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
  <style>
    body {
      font-family: 'Lato', sans-serif;
    }
  </style>
  @yield('extra-css')
</head>
<body>
  <div id="app">
    @yield('template')
  </div>
  @include('layouts.partials.javascript-local-storage')
  @include('layouts.partials.javascript-session-storage')
  <script src="{{ asset(mix('js/app.js')) }}"></script>
  {{-- @include('layouts.partials.pusher-bcustomHeadersinder') --}}
  @yield('extra-js')
</body>
</html>
