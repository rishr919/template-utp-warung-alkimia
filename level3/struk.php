<?php
// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini
    echo "";
    $namaStruk = htmlspecialchars($_SESSION["nama"], ENT_QUOTES, "UTF-8");
    $menuStruk = htmlspecialchars($_SESSION["menu"], ENT_QUOTES, "UTF-8");
    $kategoriStruk = htmlspecialchars($_SESSION["kategori"], ENT_QUOTES, "UTF-8");
    $jumlahStruk = (int) $_SESSION["jumlah"];

    echo '<section class="panel receipt" aria-labelledby="receipt-title">';
    echo '<h2 id="receipt-title">Struk Perkamen Faktur</h2>';
    echo '<dl class="receipt-details">';
    echo '<dt>Nama kru</dt><dd>' . $namaStruk . '</dd>';
    echo '<dt>Ransum</dt><dd>' . $menuStruk . '</dd>';
    echo '<dt>Jumlah porsi</dt><dd>' . $jumlahStruk . '</dd>';
    echo '<dt>Kategori kru</dt><dd>' . $kategoriStruk . '</dd>';
    echo '<dt>Harga per porsi</dt><dd>Rp' . number_format((int) $_SESSION["harga"], 0, ",", ".") . '</dd>';
    echo '<dt>Subtotal</dt><dd>Rp' . number_format((int) $_SESSION["subtotal"], 0, ",", ".") . '</dd>';
    echo '<dt>Diskon</dt><dd>Rp' . number_format((int) $_SESSION["diskon"], 0, ",", ".") . '</dd>';
    echo '<dt>Total pembayaran</dt><dd><strong>Rp' . number_format((int) $_SESSION["total"], 0, ",", ".") . '</strong></dd>';
    echo '</dl>';
    echo '<h3>Status Pengambilan</h3>';
    echo '<ol class="pickup-list">';
    for ($ramuan = 1; $ramuan <= $jumlahStruk; $ramuan++) {
        echo '<li>Porsi ' . $ramuan . ' — Siap diambil</li>';
    }
    echo '</ol>';
    echo '</section>';
}
