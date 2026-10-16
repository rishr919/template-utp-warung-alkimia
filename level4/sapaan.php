<?php
// Level 4: Kerjakan mulai darisini
if (isset($_COOKIE["nama_petualang"]) && is_string($_COOKIE["nama_petualang"]) && $_COOKIE["nama_petualang"] !== "") {
    $namaPetualang = htmlspecialchars($_COOKIE["nama_petualang"], ENT_QUOTES, "UTF-8");
    echo "<p>Salam petualang, {$namaPetualang}! Ramuan apa yang engkau cari hari ini?</p>";
} else {
    echo "<p>Selamat datang di Warung Ramuan Alkimia Embah Goib!</p>";
}
