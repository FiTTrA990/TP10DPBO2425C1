<?php include __DIR__ . '/header.php'; ?>
<h2><?= isset($item) ? 'Edit' : 'Tambah' ?> Peminjaman</h2>
<form method="post" action="index.php?page=peminjaman_save">
    <input type="hidden" name="id" value="<?= $item['id'] ?? '' ?>"/>
    <label>Buku</label>
    <select name="id_buku" required>
        <?php foreach($options['buku'] as $b): ?>
        <option value="<?= $b['id'] ?>" <?= isset($item) && $item['id_buku']==$b['id'] ? 'selected' : '' ?>><?= htmlspecialchars($b['judul_buku']) ?></option>
        <?php endforeach; ?>
    </select>

    <label>Anggota</label>
    <select name="id_anggota" required>
        <?php foreach($options['anggota'] as $a): ?>
        <option value="<?= $a['id'] ?>" <?= isset($item) && $item['id_anggota']==$a['id'] ? 'selected' : '' ?>><?= htmlspecialchars($a['nama_anggota']) ?></option>
        <?php endforeach; ?>
    </select>

    <label>Petugas</label>
    <select name="id_petugas" required>
        <?php foreach($options['petugas'] as $p): ?>
        <option value="<?= $p['id'] ?>" <?= isset($item) && $item['id_petugas']==$p['id'] ? 'selected' : '' ?>><?= htmlspecialchars($p['nama_petugas']) ?></option>
        <?php endforeach; ?>
    </select>

    <label>Jumlah</label>
    <input type="number" name="jumlah" min="1" required value="<?= $item['jumlah_pinjam'] ?? 1 ?>"/>

    <button type="submit">Simpan</button>
</form>
<?php include __DIR__ . '/footer.php'; ?>
