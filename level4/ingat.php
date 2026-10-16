<?php
setcookie("nama_petualang", $nama, [
    "expires" => time() + (27 * 60 * 60) + (33 * 60),
    "path" => "/",
    "httponly" => true,
    "samesite" => "Lax",
]);
