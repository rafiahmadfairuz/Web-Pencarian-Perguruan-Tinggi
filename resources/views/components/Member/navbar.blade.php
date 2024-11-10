<header class="header ">
    <nav>
        <div class="logo">KampusMalang.</div>
        <input type="text" placeholder="Cari Perguruan Tinggi..." name="cari" class="n backdrop-blur-md bg-white/50 rounded-md w-1/2">
        <div class="auth">
            @auth
            <a href="{{route('profile')}}"><img src="{{url('storage/image/images.jfif')}}" class="image_profile" alt=""></a>
            @endauth
            @guest
            <a href="{{route('login')}}" class="btn login">Login</a>
            <a href="{{route('register')}}" class="btn register">Register</a>
            @endguest
        </div>
    </nav>
</header>

