<div id="hero">
    <div class="hero_section">
        <div class="isi-hero">
            <h1>Segera Daftar Ke Perguruan Tinggi Impianmu</h1>
            <form class="filter">
            <div class="ff">
                <div class="f">
                    <label for="akreditasi">Akreditasi</label>
                    <select name="akreditasi" id="akreditasi">
                        <option value="" disabled selected>Cari Berdasarkan Akreditasi</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div>
                <div class="f">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" placeholder="Cari Sekarang">
                </div>
            </div>

            <div class="filter-terapkan">
                <div class="filter-kategori">
                    <p>Filter Kategori:</p>
                    <label>
                        <input type="radio" name="kategori" value="Politeknik" {{ request('kategori') == 'Politeknik' ? 'checked' : '' }}>
                        Politeknik
                    </label>
                    <label>
                        <input type="radio" name="kategori" value="Swasta" {{ request('kategori') == 'Swasta' ? 'checked' : '' }}>
                        Swasta
                    </label>
                    <label>
                        <input type="radio" name="kategori" value="Negeri" {{ request('kategori') == 'Negeri' ? 'checked' : '' }}>
                        Negeri
                    </label>
                    <label>
                        <input type="radio" name="kategori" value="Sekolah Tinggi" {{ request('kategori') == 'Sekolah Tinggi' ? 'checked' : '' }}>
                        Sekolah Tinggi
                    </label>
                    <label>
                        <input type="radio" name="kategori" value="Institut" {{ request('kategori') == 'Institut' ? 'checked' : '' }}>
                        Institut
                    </label>
                </div>
            
             <button class="tr" type="submit">Terapkan</button>
            </div>
            </form>
        </div>
    </div>
</div>
