@extends('admin.layouts.main')

@section('title') Категории@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="mb-3">Категории страниц</h1>
      </div>

      <div class="col-sm-12">
        @if (!empty($cats) && count($cats))
        <div class="list-group">
          @foreach($cats as $c)
          <a
            href="{{ route("admin.cats.edit", $c->slug) }}"
            class="list-group-item list-group-item-action d-flex justify-content-between"
          >
            <span class=" me-auto">{{ $c->title }}</span>
            <span class="badge bg-primary rounded-pill">{{ count($c->pages) }}</span>
          </a>
          @endforeach
        </div>
        @else
          <p>Список категорий пуст</p>
        @endif
      </div>
    </div>
  </div>
@endsection
