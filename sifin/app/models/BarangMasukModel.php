<?php
class BarangMasukModel
{
    private $table = 'barang_masuk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangMasuk()
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table . ' ORDER BY id_masuk DESC'
        );

        return $this->db->resultSet();
    }

    public function tambahBarangMasuk($data)
    {
        $query = "INSERT INTO barang_masuk
                  (no_transaksi, tanggal_masuk, id_supplier, id_user, keterangan)
                  VALUES
                  (:no_transaksi, :tanggal_masuk, :id_supplier, :id_user, :keterangan)";

        $this->db->query($query);
        $this->db->bind('no_transaksi', $data['no_transaksi']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('id_supplier', $data['id_supplier']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('keterangan', $data['keterangan'] ?? '');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getBarangMasukById($id)
    {
        $this->db->query(
            'SELECT * FROM barang_masuk WHERE id_masuk = :id'
        );

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function updateBarangMasuk($data)
    {
        $query = "UPDATE barang_masuk SET
                  no_transaksi = :no_transaksi,
                  tanggal_masuk = :tanggal_masuk,
                  id_supplier = :id_supplier,
                  id_user = :id_user,
                  keterangan = :keterangan
                  WHERE id_masuk = :id_masuk";

        $this->db->query($query);
        $this->db->bind('no_transaksi', $data['no_transaksi']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('id_supplier', $data['id_supplier']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('keterangan', $data['keterangan'] ?? '');
        $this->db->bind('id_masuk', $data['id_masuk']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBarangMasuk($id)
    {
        $this->db->query(
            'DELETE FROM barang_masuk WHERE id_masuk = :id'
        );

        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}