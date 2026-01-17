<?php
require_once __DIR__ . '/../koneksi.php';

if (isset($_POST['simpan'])) {
    $kode     = $_POST['kode'];
    $nama     = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga    = $_POST['harga'];
    $stok     = $_POST['stok'];
    $satuan   = $_POST['satuan'];

    mysqli_query($conn, "INSERT INTO barang VALUES (
        NULL, '$kode', '$nama', '$kategori', '$harga', '$stok', '$satuan'
    )");

    header("Location: dashboard.php?page=listproducts");
    exit;
}
?>

<div class="card">
    <h3>Tambah Produk</h3>

    <form method="POST">
        <input name="kode" placeholder="Kode Barang" required><br><br>
        <input name="nama" placeholder="Nama Produk" required><br><br>
        <input name="kategori" placeholder="Kategori" required><br><br>
        <input name="harga" type="number" placeholder="Harga" required><br><br>
        <input name="stok" type="number" placeholder="Stok" required><br><br>
        <input name="satuan" placeholder="Satuan" required><br><br>

        <button name="simpan" class="btn btn-tambah">Simpan</button>
        <a href="dashboard.php?page=listproducts" class="btn btn-hapus">Batal</a>
    </form>
</div>