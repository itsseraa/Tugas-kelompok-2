<?php

class Supplier extends Controller
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
        $data['title'] = 'Data Supplier';
        $data['supplier'] =
            $this->model('SupplierModel')->getAllSupplier();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('supplier/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Data Supplier';
        $data['key'] = $_POST['key'] ?? '';
        $data['supplier'] =
            $this->model('SupplierModel')->cariSupplier();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('supplier/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Supplier';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('supplier/create', $data);
        $this->view('templates/footer');
    }

    public function simpanSupplier()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('location: ' . base_url . '/supplier');
            exit;
        }

        if (
            $this->model('SupplierModel')->tambahSupplier($_POST) > 0
        ) {
            Flasher::setMessage(
                'Berhasil', 'ditambahkan', 'success'
            );
        } else {
            Flasher::setMessage(
                'Gagal', 'ditambahkan', 'danger'
            );
        }

        header('location: ' . base_url . '/supplier');
        exit;
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Supplier';
        $data['supplier'] =
            $this->model('SupplierModel')->getSupplierById($id);

        if (!$data['supplier']) {
            Flasher::setMessage(
                'Data supplier', 'tidak ditemukan', 'danger'
            );

            header('location: ' . base_url . '/supplier');
            exit;
        }

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('supplier/edit', $data);
        $this->view('templates/footer');
    }

    public function updateSupplier()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('location: ' . base_url . '/supplier');
            exit;
        }

        if (
            $this->model('SupplierModel')->updateDataSupplier($_POST) > 0
        ) {
            Flasher::setMessage(
                'Berhasil', 'diupdate', 'success'
            );
        } else {
            Flasher::setMessage(
                'Gagal', 'diupdate atau tidak ada perubahan', 'danger'
            );
        }

        header('location: ' . base_url . '/supplier');
        exit;
    }

    public function hapus($id)
    {
        if (
            $this->model('SupplierModel')->deleteSupplier($id) > 0
        ) {
            Flasher::setMessage(
                'Berhasil', 'dihapus', 'success'
            );
        } else {
            Flasher::setMessage(
                'Gagal', 'dihapus', 'danger'
            );
        }

        header('location: ' . base_url . '/supplier');
        exit;
    }
}