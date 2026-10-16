<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini
$hargaMenu = [
    "Healing Potion Merah" => 15000,
    "Mana Elixir Biru" => 18000,
    "Stamina Draught Hijau" => 22000,
    "Invisibility Potion Ungu" => 35000,
    "Dragon Breath Tonic Emas" => 50000,
];

$valid = true;
$pesan = "";
$jumlahValid = (is_string($_POST["jumlah"]) || is_int($_POST["jumlah"]))
    && filter_var($_POST["jumlah"], FILTER_VALIDATE_INT) !== false
    && $jumlah >= 1;

if (!is_string($nama) || trim($nama) === "") {
    $valid = false;
    $pesan = "Nama petualang wajib diisi.";
} elseif (!$jumlahValid) {
    $valid = false;
    $pesan = "Jumlah potion harus berupa bilangan bulat minimal 1.";
} elseif (!is_string($menu) || !isset($hargaMenu[$menu])) {
    $valid = false;
    $pesan = "Pilihan potion tidak valid.";
} elseif ($kategori !== "Adventure Guild" && $kategori !== "Traveler Biasa") {
    $valid = false;
    $pesan = "Kategori pelanggan tidak valid.";
}
// Hitung harga
$harga = is_string($menu) ? ($hargaMenu[$menu] ?? 0) : 0;
$subtotal = $harga * $jumlah;

// Hitung Diskon
$diskon = 0;
if ($valid && $kategori === "Adventure Guild" && $jumlah >= 3) {
    $diskon = intdiv($subtotal * 20, 100);
}

// total harga
$total = $subtotal - $diskon;

// cek valid
$valid = true;
$pesan = "Pemesanan Berhasil";
