<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>

  <link href="{{ asset('assets/compiled/css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 25rem;">
      <div class="card-body">
        <h5 class="card-title text-center">Login</h5>
        <form method="POST" action="{{ route('store.login') }}">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
          </div>
          @error('email')
            <p class="text-sm text-danger">{{ $message }}</p>
          @enderror
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
          </div>
          @error('password')
          <p class="text-sm text-danger">{{ $message }}</p>
      @enderror
      @if ($errors->has('message'))
    <div class="alert alert-danger">
        <p>{{ $errors->first('message') }}</p>
    </div>
@endif
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="#" class="btn btn-link">Lupa Password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/compiled/js/app.js') }}"></script>
</body>

</html>
