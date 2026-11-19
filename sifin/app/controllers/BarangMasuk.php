<?php
class BarangMasuk extends Controller
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
        $data['title'] = 'Data Barang Masuk';
        $data['barang_masuk'] = $this->model('BarangMasukModel')
                                     ->getAllBarangMasuk();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barang_masuk/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Barang Masuk';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barang_masuk/create', $data);
        $this->view('templates/footer');
    }

    public function simpanBarangMasuk()
    {
        if ($this->model('BarangMasukModel')
                 ->tambahBarangMasuk($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
        }

        header('location: ' . base_url . '/barangmasuk');
        exit;
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Barang Masuk';
        $data['barang_masuk'] = $this->model('BarangMasukModel')
                                     ->getBarangMasukById($id);

        if (!$data['barang_masuk']) {
            Flasher::setMessage('Data', 'tidak ditemukan', 'danger');
            header('location: ' . base_url . '/barangmasuk');
            exit;
        }

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barang_masuk/edit', $data);
        $this->view('templates/footer');
    }

    public function updateBarangMasuk()
    {
        if ($this->model('BarangMasukModel')
                 ->updateBarangMasuk($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
        } else {
            Flasher::setMessage('Gagal', 'diupdate atau tidak ada perubahan', 'danger');
        }

        header('location: ' . base_url . '/barangmasuk');
        exit;
    }

    public function hapus($id)
    {
        if ($this->model('BarangMasukModel')->deleteBarangMasuk($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
        }

        header('location: ' . base_url . '/barangmasuk');
        exit;
    }
}