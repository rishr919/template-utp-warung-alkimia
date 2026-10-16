<main class="canteen">
    <section class="panel" aria-labelledby="menu-title">
    <h2>Daftar Ramuan Alkimia</h2>
        <table>
            <tr>
                <th>Ramuan Alkimia</th>
            <th>Harga</th>
            </tr>
            <tr>
                <td>Healing Potion Merah</td>
                <td>Rp15.000</td>
            </tr>
            <tr>
                <td>Mana Elixir Biru</td>
                <td>Rp18.000</td>
            </tr>
            <tr>
                <td>Stamina Draught Hijau</td>
                <td>Rp22.000</td>
            </tr>
            <tr>
                <td>Invisibility Potion Ungu</td>
                <td>Rp35.000</td>
            </tr>
            <tr>
                <td>Dragon Breath Tonic Emas</td>
                <td>Rp50.000</td>
            </tr>
        </table>
    </section>

    <section class="panel" aria-labelledby="order-title">
        <h2>Form Pemesanan</h2>
        <p class="section-description">Lengkapi identitas jenis dan jumlah pesanan, dan status keanggotaan</p>
        <form action="proses.php" method="post" class="order-form">
            
            <div class="form-field">
                <label for="nama">Nama kru</label>
                <input type="text" id="nama" name="nama" autocomplete="name" required>
            </div>
            
            <div class="form-field">
                <label for="menu">Ramuan</label>
                <select id="menu" name="menu" required>
                    <option value="" selected disabled>Pilih ransum</option>
                    <option value="Healing Potion Merah">Healing Potion Merah — Rp15.000</option>
                    <option value="Mana Elixir Biru">Mana Elixir Biru — Rp18.000</option>
                    <option value="Stamina Draught Hijau">Stamina Draught Hijau — Rp22.000</option>
                    <option value="Invisibility Potion Ungu">Invisibility Potion Ungu — Rp35.000</option>
                    <option value="Dragon Breath Tonic Emas ">Dragon Breath Tonic Emas — Rp50.000</option>
                    </select>
            </div>

            <div class="form-field">
                <label for="jumlah">Jumlah botol</label>
                <input type="number" id="jumlah" name="jumlah" min="1" step="1" value="1" required>
                </div>

            <div class="form-field">
                <label for="kategori">Kategori pelanggan</label>
                <select id="kategori" name="kategori" required>
                    <option value="" selected disabled>Pilih kategori</option>
                    <option value="Adventure Guild">Adventure Guild</option>
                    <option value="Traveler Biasa">Traveler Biasa</option>
                    </select>
            </div>    
        
            <button type="submit">Pesan Ransum</button>
        </form>
    </section>
</main>

