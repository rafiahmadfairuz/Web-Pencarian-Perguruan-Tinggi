<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ url('Member/auth.css') }}">
</head>
<body>
    <div class="container">

        <div class="modal">
            <form class="form" action="{{ route('store.register') }}" method="POST">
                @csrf
                <h1 >Register</h1>
              <div class="credit-card-info--form">
                <div class="input_container">
                    <label for="nama" class="input_label">Nama Lengkap</label>
                    <input id="nama" class="input_field" type="text" name="nama" value="{{old('nama')}}" title="Inpit title" placeholder="Masukkan Namamu">
                    @error('nama')
                       <p class="eror">{{$message}}</p>
                    @enderror
                  </div>
                <div class="input_container">
                  <label for="email" class="input_label">Email</label>
                  <input id="email" class="input_field" type="text" name="email" value="{{old('email')}}" title="Inpit title" placeholder="Masukkan Email">
                  @error('email')
                       <p class="eror">{{$message}}</p>
                    @enderror
                </div>
                <div class="input_container">
                  <label for="password_field" class="input_label">Password</label>
                  <input id="password_field" class="input_field" type="password" name="password" title="Inpit title" placeholder="Masukkan Password">
                  @error('password')
                       <p class="eror">{{$message}}</p>
                    @enderror
                </div>
                <div class="input_container">
                  <label for="telepon" class="input_label">Nomor Telepon</label>
                  <input id="telepon" class="input_field" type="number" name="telepon" value="{{old('telepon')}}" title="Inpit title" placeholder="+ 62">
                  @error('telepon')
                       <p class="eror">{{$message}}</p>
                    @enderror
                </div>
                <div class="input_container">
                    <label for="ttl" class="input_label">Tanggal Lahir</label>
                    <input id="ttl" class="input_field" type="date" name="ttl" title="Inpit title" value="{{old('ttl')}}" placeholder="0000 0000 0000 0000">
                    @error('ttl')
                    <p class="eror">{{$message}}</p>
                 @enderror
                </div>
                  <span class="input_label">Sudah Punya Akun? <a href="{{ route('login') }}">Login sekarang</a></span>
              </div>
                <button class="login-btn" type="submit">Register</button>
            </form>
            </div>
    </div>

</body>
</html>
