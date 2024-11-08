<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('Member/auth.css') }}">
</head>
<body>
    <div class="container">

        <div class="modal">
            <form class="form" action="{{route('store.login')}}" method="POST">
                @csrf
                <h1 >Login</h1>
              <div class="credit-card-info--form">
                <div class="input_container ">
                  <label for="email" class="input_label">Email</label>
                  <input id="email" class="input_field log" type="text" value="{{old('email')}}" name="email" title="Inpit title" placeholder="Masukkan Email">
                  @if(session()->has('gagal'))
                       <p class="eror">{{ session()->get('gagal')}}</p>
                  @endif
                  @error('email')
                       <p class="eror">{{$message}}</p>
                  @enderror
                </div>
                <div class="input_container ">
                  <label for="password_field" class="input_label">Password</label>
                  <input id="password_field" class="input_field log" type="password" name="password" title="Inpit title" placeholder="Masukkan Password">
                  @if(session()->has('gagal'))
                  <p class="eror">{{ session()->get('gagal')}}</p>
                  @endif
                  @error('password')
                       <p class="eror">{{$message}}</p>
                 @enderror
                </div>
                <span class="input_label">Belum Punya Akun? <a href="{{ route('register') }}">Register sekarang</a></span>
              </div>
                <button class="login-btn" type="submit">Login</button>
            </form>
            </div>
    </div>
</body>
</html>
