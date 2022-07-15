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
<div id="auth" class="auth content-container">
  <main class="main">
    @include('shared.alerts.alerts')

    @yield('content')
  </main>
</div>
<script src="{{ asset('assets/front/js/app.js') }}"></script>
</body>
</html>
