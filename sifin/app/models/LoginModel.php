<?php 
class LoginModel { 
    private $table = 'users'; 
    private $db; 

    public function __construct() 
    { 
        $this->db = new Database; 
    } 

    public function checkLogin($data) 
    { 
        // 1. Ambil user hanya berdasarkan username
        $query = "SELECT * FROM users WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $user = $this->db->single();

        // 2. Jika user tidak ditemukan, langsung gagal
        if (!$user) {
            return false;
        }

        // 3. Verifikasi password dengan hash yang tersimpan
        if (password_verify($data['password'], $user['password'])) {
            return $user;   // login berhasil
        }

        return false;       // password salah
    } 
}