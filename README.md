# Janji
Saya Muhammad Fittra Novria Rizky dengan NIM 2411481 mengerjakan Tugas Praktikum 10 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Deskripsi Singkat Program

Aplikasi ini merupakan sistem peminjaman buku di perpustakaan menggunakan dengan arsitektur MVVM (Model-View-ViewModel). Aplikasi ini berfungsi untuk mengelola proyek, pengguna, dan tugas terkait dengan proyek tersebut. Pengguna dapat melakukan operasi CRUD(Create, Read, Update, Delete) pada setiap entitas.

# Struktur Folder Projek

<img width="239" height="657" alt="image" src="https://github.com/user-attachments/assets/b7322160-beba-48bd-9766-b8674d5c8164" />

Tabel: buku
Menyimpan data koleksi buku di perpustakaan.
Kolom	Tipe	Keterangan
id	INT, PRIMARY KEY, AUTO_INCREMENT	ID unik untuk tiap buku
judul_buku	VARCHAR(150)	Judul buku
pengarang	VARCHAR(100)	Nama pengarang buku

Tabel: anggota
Menyimpan data anggota perpustakaan yang dapat meminjam buku.
Kolom	Tipe	Keterangan
id	INT, PRIMARY KEY, AUTO_INCREMENT	ID unik anggota
nama_anggota	VARCHAR(100)	Nama anggota
alamat	VARCHAR(150)	Alamat anggota

Tabel: petugas
Menyimpan data petugas yang melayani peminjaman buku.
Kolom	Tipe	Keterangan
id	INT, PRIMARY KEY, AUTO_INCREMENT	ID unik petugas
nama_petugas	VARCHAR(100)	Nama petugas
shift	VARCHAR(50)	Shift kerja petugas

Tabel: peminjaman
Menyimpan data transaksi peminjaman buku.
Kolom	Tipe	Keterangan
id	INT, PRIMARY KEY, AUTO_INCREMENT	ID transaksi peminjaman
id_buku	INT, FOREIGN KEY	Merujuk ke buku.id
id_anggota	INT, FOREIGN KEY	Merujuk ke anggota.id
id_petugas	INT, FOREIGN KEY	Merujuk ke petugas.id
jumlah_pinjam	INT	Jumlah buku yang dipinjam

Relasi Antar Tabel
peminjaman.id_buku buku.id
Setiap transaksi peminjaman pasti memiliki data buku yang dipinjam.
peminjaman.id_anggota anggota.id
Menunjukkan siapa anggota yang meminjam buku.
peminjaman.id_petugas petugas.id
Menunjukkan siapa petugas yang melayani peminjaman.
Relasi ini menjaga integritas data, mencegah transaksi peminjaman tanpa buku, tanpa anggota, atau tanpa petugas yang valid.

# Alur Program

1. Pengguna mengakases aplikasi melalui browser ke index.php
2. Parameter URL dan action menentukan entitas dan aksi aksinya add, edit, delet, yang akan dijalankan
3. berdasarkan parameter index.php akan memanggil model model
4. view akan melakukan validasi dan logika lalu berinteraksi dengan model untuk mengambil atau memaipulasi data di databse
5. hasil dari view akan diteruskan ke view
6. jika ada aksi ambah/edit/hapus, data akan divalidasi ke models
7. jika terjadi penghapusann sama dengan sebelumnya

# Dokumentasi

<img width="1919" height="969" alt="image" src="https://github.com/user-attachments/assets/dffa3e7e-0c87-4401-941f-bd4bde2f785c" />



https://github.com/user-attachments/assets/412fe9c8-c23e-4f10-b0c3-51f43fed7be0

