<?php

class LokasiModel
{
    private $table = 'lokasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Mengambil semua data lokasi
    public function getAllLokasi()
    {
        $this->db->query(
            "SELECT * FROM {$this->table} ORDER BY id_lokasi DESC"
        );

        return $this->db->resultSet();
    }

    // Mencari lokasi
    public function cariLokasi()
    {
        $key = $_POST['key'] ?? '';

        $this->db->query(
            "SELECT * FROM {$this->table}
             WHERE nama_lokasi LIKE :key
             ORDER BY id_lokasi DESC"
        );

        $this->db->bind('key', '%' . $key . '%');

        return $this->db->resultSet();
    }

    // Mengambil lokasi berdasarkan ID
    public function getLokasiById($id)
    {
        $this->db->query(
            "SELECT * FROM {$this->table}
             WHERE id_lokasi = :id"
        );

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    // Menambahkan lokasi
    public function tambahLokasi($data)
    {
        $this->db->query(
            "INSERT INTO {$this->table} (nama_lokasi)
             VALUES (:nama_lokasi)"
        );

        $this->db->bind(
            'nama_lokasi',
            trim($data['nama_lokasi'])
        );

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Mengubah lokasi
    public function updateDataLokasi($data)
    {
        $this->db->query(
            "UPDATE {$this->table}
             SET nama_lokasi = :nama_lokasi
             WHERE id_lokasi = :id_lokasi"
        );

        $this->db->bind(
            'nama_lokasi',
            trim($data['nama_lokasi'])
        );

        $this->db->bind('id_lokasi', $data['id_lokasi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Menghapus lokasi
    public function deleteLokasi($id)
    {
        $this->db->query(
            "DELETE FROM {$this->table}
             WHERE id_lokasi = :id"
        );

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}