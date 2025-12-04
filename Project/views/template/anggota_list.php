<?php include __DIR__ . '/header.php'; ?>
<h2>Daftar Anggota</h2>
<a href="index.php?page=anggota_add">Tambah Anggota</a>
<table>
<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Aksi</th></tr>
<?php foreach($data as $row): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['nama_anggota']) ?></td>
    <td><?= htmlspecialchars($row['alamat']) ?></td>
    <td>
        <a href="index.php?page=anggota_edit&id=<?= $row['id'] ?>">Edit</a> |
        <a href="index.php?page=anggota_delete&id=<?= $row['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
<?php include __DIR__ . '/footer.php'; ?>
