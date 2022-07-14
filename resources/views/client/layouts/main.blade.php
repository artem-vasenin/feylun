<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('shared/css/fa5.css') }}">
  <link rel="stylesheet" href="{{ asset('shared/css/styles.css') }}">
  <title>Document</title>
</head>
<body>
<div id="client" class="client content-container">
  @include('client.layouts.parts.header')

  <main class="main">
    @yield('content')
  </main>

  @include('client.layouts.parts.footer')
<script src="{{ asset('assets/front/js/app.js') }}"></script>
</body>
</html>
