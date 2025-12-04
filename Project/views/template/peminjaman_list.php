<?php include __DIR__ . '/header.php'; ?>
<h2>Daftar Peminjaman</h2>
<a href="index.php?page=peminjaman_add">Tambah Peminjaman</a>
<table>
<tr><th>ID</th><th>Buku</th><th>Anggota</th><th>Petugas</th><th>Jumlah</th><th>Aksi</th></tr>
<?php foreach($data as $row): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['judul_buku']) ?></td>
    <td><?= htmlspecialchars($row['nama_anggota']) ?></td>
    <td><?= htmlspecialchars($row['nama_petugas']) ?></td>
    <td><?= htmlspecialchars($row['jumlah_pinjam']) ?></td>
    <td>
        <a href="index.php?page=peminjaman_edit&id=<?= $row['id'] ?>">Edit</a> |
        <a href="index.php?page=peminjaman_delete&id=<?= $row['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
<?php include __DIR__ . '/footer.php'; ?>
