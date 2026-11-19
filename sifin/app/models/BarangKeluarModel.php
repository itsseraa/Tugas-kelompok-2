<?php
class BarangKeluarModel
{
    private $table = 'barang_keluar';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangKeluar()
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table . ' ORDER BY id_keluar DESC'
        );

        return $this->db->resultSet();
    }

    public function tambahBarangKeluar($data)
    {
        $query = "INSERT INTO barang_keluar
                  (no_transaksi, tanggal_keluar, penerima, id_lokasi, id_user, keterangan)
                  VALUES
                  (:no_transaksi, :tanggal_keluar, :penerima, :id_lokasi, :id_user, :keterangan)";

        $this->db->query($query);
        $this->db->bind('no_transaksi', $data['no_transaksi']);
        $this->db->bind('tanggal_keluar', $data['tanggal_keluar']);
        $this->db->bind('penerima', $data['penerima']);
        $this->db->bind('id_lokasi', $data['id_lokasi']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('keterangan', $data['keterangan'] ?? '');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getBarangKeluarById($id)
    {
        $this->db->query(
            'SELECT * FROM barang_keluar WHERE id_keluar = :id'
        );

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function updateBarangKeluar($data)
    {
        $query = "UPDATE barang_keluar SET
                  no_transaksi = :no_transaksi,
                  tanggal_keluar = :tanggal_keluar,
                  penerima = :penerima,
                  id_lokasi = :id_lokasi,
                  id_user = :id_user,
                  keterangan = :keterangan
                  WHERE id_keluar = :id_keluar";

        $this->db->query($query);
        $this->db->bind('no_transaksi', $data['no_transaksi']);
        $this->db->bind('tanggal_keluar', $data['tanggal_keluar']);
        $this->db->bind('penerima', $data['penerima']);
        $this->db->bind('id_lokasi', $data['id_lokasi']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('keterangan', $data['keterangan'] ?? '');
        $this->db->bind('id_keluar', $data['id_keluar']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBarangKeluar($id)
    {
        $this->db->query(
            'DELETE FROM barang_keluar WHERE id_keluar = :id'
        );

        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}