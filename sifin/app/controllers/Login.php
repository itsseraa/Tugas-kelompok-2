<?php 
class Login extends Controller { 
    public function index() 
    { 
        $data['title'] = 'Halaman Login'; 
        $this->view('login/login', $data); 
    } 

    public function prosesLogin() { 
        $row = $this->model('LoginModel')->checkLogin($_POST);

        if ($row) {   // array tidak kosong = login berhasil
            $_SESSION['id_user']       = $row['id_user'];
            $_SESSION['nama_lengkap']  = $row['nama_lengkap']; 
            $_SESSION['username']      = $row['username']; 
            $_SESSION['session_login'] = 'sudah_login';  

            header('location: ' . base_url . '/home');
            exit;
        } else { 
            Flasher::setMessage('Username / Password', 'salah.', 'danger'); 
            header('location: ' . base_url . '/login'); 
            exit;  
        } 
    } 
}