<?php
$query = "SELECT * FROM sampelmsib";
$result = $koneksi->query($query);

// Memeriksa apakah query berhasil dijalankan
if ($result->num_rows > 0) {
    // Mengambil data baris per baris
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . "<br>";
        // Sesuaikan dengan nama kolom yang ada di tabel
    }
} else {
    echo "Tidak ada data.";
}

// Menutup koneksi
$koneksi->close();
?>