<?php

class Lokasi extends Controller
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
        $data['title'] = 'Data Lokasi';
        $data['lokasi'] = $this->model('LokasiModel')->getAllLokasi();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('lokasi/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Data Lokasi';
        $data['key'] = $_POST['key'] ?? '';
        $data['lokasi'] = $this->model('LokasiModel')->cariLokasi();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('lokasi/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Lokasi';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('lokasi/create', $data);
        $this->view('templates/footer');
    }

    public function simpanLokasi()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('location: ' . base_url . '/lokasi');
            exit;
        }
        if (
            $this->model('LokasiModel')->tambahLokasi($_POST) > 0
        ) {
            Flasher::setMessage(
                'Berhasil', 'ditambahkan', 'success'
            );
        } else {
            Flasher::setMessage(
                'Gagal', 'ditambahkan', 'danger'
            );
        }

        header('location: ' . base_url . '/lokasi');
        exit;
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Lokasi';
        $data['lokasi'] = $this->model('LokasiModel')->getLokasiById($id);

        if (!$data['lokasi']) {
            Flasher::setMessage(
                'Data lokasi', 'tidak ditemukan', 'danger'
            );

            header('location: ' . base_url . '/lokasi');
            exit;
        }

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('lokasi/edit', $data);
        $this->view('templates/footer');
    }

    public function updateLokasi()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('location: ' . base_url . '/lokasi');
            exit;
        }
        if (
            $this->model('LokasiModel')->updateDataLokasi($_POST) > 0
        ) {
            Flasher::setMessage(
                'Berhasil', 'diupdate', 'success'
            );
        } else {
            Flasher::setMessage(
                'Gagal', 'diupdate atau tidak ada perubahan', 'danger'
            );
        }

        header('location: ' . base_url . '/lokasi');
        exit;
    }

    public function hapus($id)
    {
        if (
            $this->model('LokasiModel')->deleteLokasi($id) > 0
        ) {
            Flasher::setMessage(
                'Berhasil', 'dihapus', 'success'
            );
        } else {
            Flasher::setMessage(
                'Gagal', 'dihapus', 'danger'
            );
        }

        header('location: ' . base_url . '/lokasi');
        exit;
    }
}