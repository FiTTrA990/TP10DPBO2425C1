<?php include __DIR__ . '/header.php'; ?>
<h2><?= isset($item) ? 'Edit' : 'Tambah' ?> Petugas</h2>
<form method="post" action="index.php?page=petugas_save">
    <input type="hidden" name="id" value="<?= $item['id'] ?? '' ?>"/>
    <label>Nama</label>
    <input type="text" name="nama" required value="<?= $item['nama_petugas'] ?? '' ?>"/>
    <label>Shift</label>
    <input type="text" name="shift" required value="<?= $item['shift'] ?? '' ?>"/>
    <button type="submit">Simpan</button>
</form>
<?php include __DIR__ . '/footer.php'; ?>
