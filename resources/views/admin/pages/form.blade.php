@extends('admin.layouts.main')

@section('title')
  Категории
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        @if($cat)
        <h1 class="mb-3">Редактирование категории</h1>
        @else
        <h1 class="mb-3">Создание категории</h1>
        @endif
      </div>

      <div class="col-sm-12">
        @if ($errors->any())
          <div class="alert alert-danger errors">
            <ul>
              @foreach ($errors->all() as $err)<li>{{ $err }}</li>@endforeach
            </ul>
          </div>
        @endif
        <div class="card">
          <div class="card-body">
            {{-- BODY --}}
            <form
              id="create"
              action="{{ $cat ? route('admin.cats.update', $cat->id) : route('admin.cats.create') }}"
              method="post"
            >
              @csrf
              @method('PUT')
              <div class="form-group">
                <label class="mb-3" for="exampleInputEmail1">Заголовок категории</label>
                <input
                  type="text"
                  class="form-control @error('title') is-invalid @enderror"
                  id="exampleInputEmail1"
                  name="title"
                  @if($cat)
                  value="{{ $cat->title }}"
                  @endif
                >
              </div>
            </form>
            {{-- /BODY --}}
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button
              form="create"
              type="submit"
              class="btn btn-primary float-right"
            >@if($cat)Редактировать@elseДобавить категорию@endif</button>
          </div>
          <!-- /.card-footer-->
        </div>
      </div>
    </div>
  </div>
@endsection
