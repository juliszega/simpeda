<?php

$mysqli = new mysqli("localhost", "root", "", "simpedas");

if (!$mysqli) {
    echo "Koneksi bermasalah !";
}
