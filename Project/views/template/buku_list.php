<?php include __DIR__ . '/header.php'; ?>
<h2>Daftar Buku</h2>
<a href="index.php?page=buku_add">Tambah Buku</a>
<table>
<tr><th>ID</th><th>Judul</th><th>Pengarang</th><th>Aksi</th></tr>
<?php foreach($data as $row): ?>
<tr>
    <td><?= htmlspecialchars($row['id']) ?></td>
    <td><?= htmlspecialchars($row['judul_buku']) ?></td>
    <td><?= htmlspecialchars($row['pengarang']) ?></td>
    <td>
        <a href="index.php?page=buku_edit&id=<?= $row['id'] ?>">Edit</a> |
        <a href="index.php?page=buku_delete&id=<?= $row['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
<?php include __DIR__ . '/footer.php'; ?>
