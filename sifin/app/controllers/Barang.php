<?php

class Barang extends Controller
{
    public function __construct() 
{  
if($_SESSION['session_login'] != 'sudah_login') { 
Flasher::setMessage('Login','Tidak ditemukan.','danger'); 
header('location: '. base_url . '/login'); 
exit; 
} 
}

    public function index()
    {
        $data['title']    = 'Data Barang';
        $data['barang'] = $this->model('BarangModel')->getAllBarang();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

public function cari()
{
    $data['title']    = 'Data Barang';
    $data['barang'] = $this->model('BarangModel')->cariBarang($_POST['key']);
    $data['key']      = $_POST['key'];

    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('barang/index', $data);
    $this->view('templates/footer');
}
public function tambah()
{
    $data['title'] = 'Tambah Barang';
    $data['kategori']  = $this->model('KategoriModel')->getAllKategori();
    $data['supplier']  = $this->model('SupplierModel')->getAllSupplier();
    $data['lokasi']    = $this->model('LokasiModel')->getAllLokasi();
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('barang/create', $data);
    $this->view('templates/footer');
}
public function simpanBarang()
{
    $_POST['id_user'] = $_SESSION['id_user'];

    if ($this->model('BarangModel')->tambahBarang($_POST) > 0) {
        Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
        header('location: ' . base_url . '/barang');
        exit;
    } else {
        Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
        header('location: ' . base_url . '/barang');
        exit;
    }
}
public function edit($id)
{
    $data['title']    = 'Edit Barang';
    $data['kategori']  = $this->model('KategoriModel')->getAllKategori();
    $data['supplier']  = $this->model('SupplierModel')->getAllSupplier();
    $data['lokasi']    = $this->model('LokasiModel')->getAllLokasi();
    $data['barang'] = $this->model('BarangModel')->getBarangById($id);
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('barang/edit', $data);
    $this->view('templates/footer');
}

public function updateBarang()
{
    $_POST['id_user'] = $_SESSION['id_user'];
    
    if ($this->model('BarangModel')->updateDataBarang($_POST) > 0) {
        Flasher::setMessage('Berhasil', 'diupdate', 'success');
        header('location: ' . base_url . '/barang');
        exit;
    } else {
        Flasher::setMessage('Gagal', 'diupdate', 'danger');
        header('location: ' . base_url . '/barang');
        exit;
    }
}
public function hapus($id)
{
    if ($this->model('BarangModel')->deleteBarang($id) > 0) {
        Flasher::setMessage('Berhasil', 'dihapus', 'success');
    } else {
        Flasher::setMessage('Gagal', 'dihapus', 'danger');
    }
    header('location: ' . base_url . '/barang');
    exit;
}
}