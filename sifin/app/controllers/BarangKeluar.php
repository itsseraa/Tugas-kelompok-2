<?php
class BarangKeluar extends Controller
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
        $data['title'] = 'Data Barang Keluar';
        $data['barangKeluar'] = $this->model('BarangKeluarModel')
                                     ->getAllBarangKeluar();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barangkeluar/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Barang Keluar';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barangkeluar/create', $data);
        $this->view('templates/footer');
    }

    public function simpanBarangKeluar()
    {
        if ($this->model('BarangKeluarModel')
                 ->tambahBarangKeluar($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
        }

        header('location: ' . base_url . '/barangkeluar');
        exit;
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Barang Keluar';
        $data['barangKeluar'] = $this->model('BarangKeluarModel')
                                     ->getBarangKeluarById($id);

        if (!$data['barangKeluar']) {
            Flasher::setMessage('Data', 'tidak ditemukan', 'danger');
            header('location: ' . base_url . '/barangkeluar');
            exit;
        }

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('barangkeluar/edit', $data);
        $this->view('templates/footer');
    }

    public function updateBarangKeluar()
    {
        if ($this->model('BarangKeluarModel')
                 ->updateBarangKeluar($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
        } else {
            Flasher::setMessage('Gagal', 'diupdate atau tidak ada perubahan', 'danger');
        }

        header('location: ' . base_url . '/barangkeluar');
        exit;
    }

    public function hapus($id)
    {
        if ($this->model('BarangKeluarModel')->deleteBarangKeluar($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
        }

        header('location: ' . base_url . '/barangkeluar');
        exit;
    }
}