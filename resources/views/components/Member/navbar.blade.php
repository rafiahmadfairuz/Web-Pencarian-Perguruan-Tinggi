<header class="header">
    <nav>
        <div class="logo">KampusMalang.</div>
        <ul>
            <li>
                <a href="">Sekolah</a>
                <a href="">Sekolah</a>
                <a href="">Sekolah</a>
                <a href="">Sekolah</a>
            </li>
        </ul>
        <input type="text" placeholder="Cari Perguruan Tinggi..." name="cari" class="navbar_cari">
        <div class="auth">
            @auth
            <a href="{{route('profile')}}"><img src="{{url('storage/image/kosong.jpg')}}" class="image_profile" alt=""></a>
            @endauth
            @guest
            <a href="{{route('login')}}" class="btn login">Login</a>
            <a href="{{route('register')}}" class="btn register">Register</a>
            @endguest
        </div>
    </nav>
</header>

