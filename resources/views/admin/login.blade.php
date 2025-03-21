<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico">

  <title>Login Pages</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/bootstrap@5.0.2.min.css')}}" />

    <!-- bootstrap 5.0.2 js -->
    <script src="{{asset('js/admin/bootstrap@5.0.2.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap@5.0.2.bundle.min.js')}}"></script>

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/login.css')}}" />

</head>
<body>

<div class="bg">


</div>

  <main class="form-signin">
    
      <h1 class="h3">Login</h1>
      @if($errors->any())
      @foreach($errors->all() as $error)
      <div style="color: white; font-weight:bold; background:red;">{{$error}}</div>
      @endforeach
      @endif
    
    <form action="login" method="POST">
      @csrf


      <div class="form-floating">
        {{-- <span>@error('username'){{$message}}@enderror</span> --}}
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" value="1" name="remember_me" id="rememberMeSwitch">
        <label class="form-check-label" for="rememberMeSwitch"> Remember me</label>&nabla;<a href="/">Back</a>
        </div>
        
      </div>
      <button class="w-100 btn btn-lg" type="submit">Sign in</button>
    </form>
  </main>

</body>
</html>


