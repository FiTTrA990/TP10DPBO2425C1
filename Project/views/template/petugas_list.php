<?php include __DIR__ . '/header.php'; ?>
<h2>Daftar Petugas</h2>
<a href="index.php?page=petugas_add">Tambah Petugas</a>
<table>
<tr><th>ID</th><th>Nama</th><th>Shift</th><th>Aksi</th></tr>
<?php foreach($data as $row): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['nama_petugas']) ?></td>
    <td><?= htmlspecialchars($row['shift']) ?></td>
    <td>
        <a href="index.php?page=petugas_edit&id=<?= $row['id'] ?>">Edit</a> |
        <a href="index.php?page=petugas_delete&id=<?= $row['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
<?php include __DIR__ . '/footer.php'; ?>
