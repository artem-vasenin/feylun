@if($errors->any())
  <section class="alerts mt-2">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="alert alert-danger">
            <ul class="m-0">
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
@elseif(session()->has('success'))
  <section class="alerts mt-2">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        </div>
      </div>
    </div>
  </section>
@endif
