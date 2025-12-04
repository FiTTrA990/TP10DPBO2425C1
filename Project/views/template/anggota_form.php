<?php include __DIR__ . '/header.php'; ?>
<h2><?= isset($item) ? 'Edit' : 'Tambah' ?> Anggota</h2>
<form method="post" action="index.php?page=anggota_save">
    <input type="hidden" name="id" value="<?= $item['id'] ?? '' ?>"/>
    <label>Nama</label>
    <input type="text" name="nama" required value="<?= $item['nama_anggota'] ?? '' ?>"/>
    <label>Alamat</label>
    <input type="text" name="alamat" required value="<?= $item['alamat'] ?? '' ?>"/>
    <button type="submit">Simpan</button>
</form>
<?php include __DIR__ . '/footer.php'; ?>
