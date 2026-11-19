<?php

class SupplierModel
{
    private $table = 'supplier';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSupplier()
    {
        $this->db->query(
            "SELECT * FROM {$this->table}
             ORDER BY id_supplier DESC"
        );

        return $this->db->resultSet();
    }

    public function cariSupplier()
    {
        $key = $_POST['key'] ?? '';

        $this->db->query(
            "SELECT * FROM {$this->table}
             WHERE nama_supplier LIKE :key
                OR alamat LIKE :key
                OR hp LIKE :key
                OR email LIKE :key
             ORDER BY id_supplier DESC"
        );

        $this->db->bind('key', '%' . $key . '%');

        return $this->db->resultSet();
    }

    public function getSupplierById($id)
    {
        $this->db->query(
            "SELECT * FROM {$this->table}
             WHERE id_supplier = :id"
        );

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahSupplier($data)
    {
        $this->db->query(
            "INSERT INTO {$this->table}
            (nama_supplier, alamat, hp, email)
            VALUES (:nama_supplier, :alamat, :hp, :email)"
        );

        $this->db->bind(
            'nama_supplier', trim($data['nama_supplier'])
        );
        $this->db->bind('alamat', trim($data['alamat']));
        $this->db->bind('hp', trim($data['hp']));
        $this->db->bind('email', trim($data['email']));

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataSupplier($data)
    {
        $this->db->query(
            "UPDATE {$this->table}
             SET nama_supplier = :nama_supplier,
                 alamat = :alamat,
                 hp = :hp,
                 email = :email
             WHERE id_supplier = :id_supplier"
        );

        $this->db->bind(
            'nama_supplier', trim($data['nama_supplier'])
        );
        $this->db->bind('alamat', trim($data['alamat']));
        $this->db->bind('hp', trim($data['hp']));
        $this->db->bind('email', trim($data['email']));
        $this->db->bind('id_supplier', $data['id_supplier']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteSupplier($id)
    {
        $this->db->query(
            "DELETE FROM {$this->table}
             WHERE id_supplier = :id"
        );

        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}