<?php include __DIR__ . '/header.php'; ?>
<h2><?= isset($item) ? 'Edit' : 'Tambah' ?> Buku</h2>
<form method="post" action="index.php?page=buku_save">
    <input type="hidden" name="id" value="<?= $item['id'] ?? '' ?>"/>
    <label>Judul</label>
    <input type="text" name="judul" required value="<?= $item['judul_buku'] ?? '' ?>"/>
    <label>Pengarang</label>
    <input type="text" name="pengarang" required value="<?= $item['pengarang'] ?? '' ?>"/>
    <button type="submit">Simpan</button>
</form>
<?php include __DIR__ . '/footer.php'; ?>
