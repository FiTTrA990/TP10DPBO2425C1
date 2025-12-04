-- Create and use
CREATE DATABASE IF NOT EXISTS library;
USE library;

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(150) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anggota` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `petugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(100) NOT NULL,
  `shift` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `jumlah_pinjam` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_buku` (`id_buku`),
  KEY `fk_anggota` (`id_anggota`),
  KEY `fk_petugas` (`id_petugas`),
  CONSTRAINT `fk_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `buku` (`id`, `judul_buku`, `pengarang`) VALUES
(1, 'Laskar Pelangi', 'Andrea Hirata'),
(2, 'Bumi Manusia', 'Pramoedya Ananta Toer'),
(3, 'Negeri Para Bedebah', 'Tere Liye');

INSERT INTO `anggota` (`id`, `nama_anggota`, `alamat`) VALUES
(1, 'Dian Sari', 'Jakarta'),
(2, 'Rama Putra', 'Bandung'),
(3, 'Sinta Dewi', 'Surabaya');

INSERT INTO `petugas` (`id`, `nama_petugas`, `shift`) VALUES
(1, 'Andi Saputra', 'Pagi'),
(2, 'Maya Lestari', 'Siang'),
(3, 'Joko Pranoto', 'Malam');

INSERT INTO `peminjaman` (`id`, `id_buku`, `id_anggota`, `id_petugas`, `jumlah_pinjam`) VALUES
(1, 1, 1, 1, 1),
(2, 3, 1, 2, 1),
(3, 2, 2, 3, 1),
(4, 1, 3, 1, 2);
