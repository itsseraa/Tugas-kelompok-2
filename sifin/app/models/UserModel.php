<?php

class UserModel
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Mengambil semua data user
    public function getAllUser()
    {
        $this->db->query(
            "SELECT * FROM " . $this->table . " ORDER BY id_user DESC"
        );

        return $this->db->resultSet();
    }

    // Mencari data user
    public function cariUser()
    {
        $key = $_POST['key'] ?? '';

        $this->db->query(
            "SELECT * FROM " . $this->table . "
             WHERE nama_lengkap LIKE :key
                OR username LIKE :key
                OR role LIKE :key
             ORDER BY id_user DESC"
        );

        $this->db->bind('key', '%' . $key . '%');

        return $this->db->resultSet();
    }

    // Mengambil user berdasarkan ID
    public function getUserById($id)
    {
        $this->db->query(
            "SELECT * FROM " . $this->table . " WHERE id_user = :id"
        );

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    // Menambahkan user baru
    public function tambahUser($data)
    {
        $password = password_hash(
            $data['password'],
            PASSWORD_DEFAULT
        );

        $this->db->query(
            "INSERT INTO users
            (nama_lengkap, username, password, role, is_active)
            VALUES
            (:nama_lengkap, :username, :password, :role, :is_active)"
        );

        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $password);
        $this->db->bind('role', $data['role']);
        $this->db->bind('is_active', $data['is_active']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Mengubah data user
    public function updateDataUser($data)
    {
        $this->db->query(
            "UPDATE users SET
                nama_lengkap = :nama_lengkap,
                username = :username,
                role = :role,
                is_active = :is_active
             WHERE id_user = :id_user"
        );

        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('is_active', $data['is_active']);
        $this->db->bind('id_user', $data['id_user']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Menghapus user
    public function deleteUser($id)
    {
        $this->db->query(
            "DELETE FROM users WHERE id_user = :id"
        );

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}