<header class="header">
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('admin.index') }}">Feylun</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item nav-item__parent dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menu1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Категории
            </a>
            <ul class="dropdown-menu" aria-labelledby="menu1">
              <li><a class="dropdown-item" href="{{ route('admin.cats') }}">Список категорий</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.cats.form') }}">Добавить категорию</a></li>
            </ul>
          </li>
          <li class="nav-item nav-item__parent dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menu2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Страницы
            </a>
            <ul class="dropdown-menu" aria-labelledby="menu2">
              <li><a class="dropdown-item" href="{{ route('admin.pages') }}">Список страниц</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.pages.form') }}">Добавить страницу</a></li>
            </ul>
          </li>
{{--          <li class="nav-item nav-item__parent">--}}
{{--            <a class="nav-link active" aria-current="page" href="#">О нас</a>--}}
{{--          </li>--}}
        </ul>
      </div>
    </div>
  </nav>
</header>
