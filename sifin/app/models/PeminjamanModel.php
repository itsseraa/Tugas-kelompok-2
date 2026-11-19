<?php

class PeminjamanModel
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table . ' ORDER BY id_peminjaman DESC'
        );

        return $this->db->resultSet();
    }
}
