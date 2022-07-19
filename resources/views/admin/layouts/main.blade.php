<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('shared/css/fa5.css') }}">
  <link rel="stylesheet" href="{{ asset('shared/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('manager/css/styles.css') }}">
  <title>@section('title')Админ панель@endsection</title>
</head>
<body>
<div id="admin" class="admin content-container">
  @include('admin.layouts.parts.header')

  <main class="main">
    @yield('content')
  </main>

  @include('admin.layouts.parts.footer')
</div>
<script src="{{ asset('shared/js/vue3.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="{{ asset('shared/js/app.js') }}"></script>
<script src="{{ asset('manager/js/app.js') }}"></script>
</body>
</html>
