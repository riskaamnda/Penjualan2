<?php
require_once __DIR__ . '/../koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE barang SET
        kode_barang='$_POST[kode]',
        nama_barang='$_POST[nama]',
        kategori='$_POST[kategori]',
        harga='$_POST[harga]',
        stok='$_POST[stok]',
        satuan='$_POST[satuan]'
        WHERE id_barang='$id'
    ");

    header("Location: dashboard.php?page=listproducts");
    exit;
}
?>

<div class="card">
    <h3>Edit Produk</h3>

    <form method="POST">
        <input name="kode" value="<?= $row['kode_barang']; ?>" required><br><br>
        <input name="nama" value="<?= $row['nama_barang']; ?>" required><br><br>
        <input name="kategori" value="<?= $row['kategori']; ?>" required><br><br>
        <input name="harga" type="number" value="<?= $row['harga']; ?>" required><br><br>
        <input name="stok" type="number" value="<?= $row['stok']; ?>" required><br><br>
        <input name="satuan" value="<?= $row['satuan']; ?>" required><br><br>

        <button name="update" class="btn btn-edit">Update</button>
        <a href="dashboard.php?page=listproducts" class="btn btn-hapus">Batal</a>
    </form>
</div>