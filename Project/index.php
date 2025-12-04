<?php
require_once "config/Database.php";
$db = (new Database())->connect();

$page = $_GET['page'] ?? 'home';
switch($page){
    case 'buku':
        require_once "viewmodels/BukuViewModel.php";
        $vm = new BukuViewModel($db);
        $data = $vm->all();
        include "views/template/buku_list.php";
        break;
    case 'buku_add':
        include "views/template/buku_form.php";
        break;
    case 'buku_edit':
        require_once "viewmodels/BukuViewModel.php";
        $vm = new BukuViewModel($db);
        $item = $vm->find($_GET['id']);
        include "views/template/buku_form.php";
        break;
    case 'buku_save':
        require_once "viewmodels/BukuViewModel.php";
        $vm = new BukuViewModel($db);
        $vm->save($_POST);
        header('Location: index.php?page=buku'); exit;
        break;
    case 'buku_delete':
        require_once "viewmodels/BukuViewModel.php";
        $vm = new BukuViewModel($db);
        $vm->delete($_GET['id']);
        header('Location: index.php?page=buku'); exit;
        break;

    case 'anggota':
        require_once "viewmodels/AnggotaViewModel.php";
        $vm = new AnggotaViewModel($db);
        $data = $vm->all();
        include "views/template/anggota_list.php";
        break;
    case 'anggota_add':
        include "views/template/anggota_form.php";
        break;
    case 'anggota_edit':
        require_once "viewmodels/AnggotaViewModel.php";
        $vm = new AnggotaViewModel($db);
        $item = $vm->find($_GET['id']);
        include "views/template/anggota_form.php";
        break;
    case 'anggota_save':
        require_once "viewmodels/AnggotaViewModel.php";
        $vm = new AnggotaViewModel($db);
        $vm->save($_POST);
        header('Location: index.php?page=anggota'); exit;
        break;
    case 'anggota_delete':
        require_once "viewmodels/AnggotaViewModel.php";
        $vm = new AnggotaViewModel($db);
        $vm->delete($_GET['id']);
        header('Location: index.php?page=anggota'); exit;
        break;

    case 'petugas':
        require_once "viewmodels/PetugasViewModel.php";
        $vm = new PetugasViewModel($db);
        $data = $vm->all();
        include "views/template/petugas_list.php";
        break;
    case 'petugas_add':
        include "views/template/petugas_form.php";
        break;
    case 'petugas_edit':
        require_once "viewmodels/PetugasViewModel.php";
        $vm = new PetugasViewModel($db);
        $item = $vm->find($_GET['id']);
        include "views/template/petugas_form.php";
        break;
    case 'petugas_save':
        require_once "viewmodels/PetugasViewModel.php";
        $vm = new PetugasViewModel($db);
        $vm->save($_POST);
        header('Location: index.php?page=petugas'); exit;
        break;
    case 'petugas_delete':
        require_once "viewmodels/PetugasViewModel.php";
        $vm = new PetugasViewModel($db);
        $vm->delete($_GET['id']);
        header('Location: index.php?page=petugas'); exit;
        break;

    case 'peminjaman':
        require_once "viewmodels/PeminjamanViewModel.php";
        $vm = new PeminjamanViewModel($db);
        $data = $vm->all();
        include "views/template/peminjaman_list.php";
        break;
    case 'peminjaman_add':
        require_once "viewmodels/PeminjamanViewModel.php";
        $vm = new PeminjamanViewModel($db);
        $options = $vm->getOptions();
        include "views/template/peminjaman_form.php";
        break;
    case 'peminjaman_edit':
        require_once "viewmodels/PeminjamanViewModel.php";
        $vm = new PeminjamanViewModel($db);
        $item = $vm->find($_GET['id']);
        $options = $vm->getOptions();
        include "views/template/peminjaman_form.php";
        break;
    case 'peminjaman_save':
        require_once "viewmodels/PeminjamanViewModel.php";
        $vm = new PeminjamanViewModel($db);
        $vm->save($_POST);
        header('Location: index.php?page=peminjaman'); exit;
        break;
    case 'peminjaman_delete':
        require_once "viewmodels/PeminjamanViewModel.php";
        $vm = new PeminjamanViewModel($db);
        $vm->delete($_GET['id']);
        header('Location: index.php?page=peminjaman'); exit;
        break;

    default:
        include "views/index.php";
        break;
}
