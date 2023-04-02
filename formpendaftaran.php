<form action="formpendaftaran.php" method="POST">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div>
        <label>Email</label> <br>
        <input type="email" name="email">
    </div>
    <div>
        <label>Umur</label> <br>
        <input type="number" name="Umur">
    </div>
    <div>
        <label>TTL</label> <br>
        <input type="date" name="TTL">
    </div>
    <div>
        <label>Alamat</label> <br>
        <textarea name="alamat"></textarea>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="l"> Laki-Laki <br>
        <input type="radio" name="jenis_kelamin" value="p"> Perempuan
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Status</label> <br>
        <select name="status">
            <option value="lajang">Lajang</option>
            <option value="menikah">Menikah</option>
        </select>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Hobi</label> <br>
        <input type="checkbox" name="hobi[]" value="bernyanyi"> Bernyanyi <br>
        <input type="checkbox" name="hobi[]" value="main bola"> Main Bola <br>
        <input type="checkbox" name="hobi[]" value="traveling"> Traveling <br>
        <input type="checkbox" name="hobi[]" value="ngoding"> Ngoding <br>
    </div>
    <div>
        <button>Kirim</button>
    </div>
</form>