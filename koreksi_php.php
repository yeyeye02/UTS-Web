<?php
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    echo "Halo " . $nama;
} else {
    echo "Nama belum diisi";
}
?>