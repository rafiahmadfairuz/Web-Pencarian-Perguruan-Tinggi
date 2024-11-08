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
            <form action="{{route('logout')}}" method="POST">
                @csrf
                @method('DELETE')
               <button type="submit" class="btn register">Logout</button>
            </form>
            @endauth
            @guest
            <a href="{{route('profile')}}">Profile</a>

            <a href="{{route('login')}}" class="btn login">Login</a>
            <a href="{{route('register')}}" class="btn register">Register</a>
            @endguest
        </div>
    </nav>
</header>

