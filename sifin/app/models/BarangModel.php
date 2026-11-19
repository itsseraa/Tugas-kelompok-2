<?php
class BarangModel
{
    private $db;
 
    public function __construct()
    {
        $this->db = new Database;
    }
 
    private $baseQuery = "SELECT b.*, k.nama_kategori, s.nama_supplier, l.nama_lokasi
                           FROM barang b
                           LEFT JOIN kategori k ON b.id_kategori = k.id_kategori
                           LEFT JOIN supplier s ON b.id_supplier = s.id_supplier
                           LEFT JOIN lokasi l ON b.id_lokasi = l.id_lokasi";
 
    public function getAllBarang()
    {
        $this->db->query($this->baseQuery . ' ORDER BY b.id_barang DESC');
        return $this->db->resultSet();
    }
 
    public function getBarangById($id)
    {
        $this->db->query($this->baseQuery . ' WHERE b.id_barang = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
 
    public function tambahBarang($data)
    {
        $query = "INSERT INTO barang
            (kode_barang, nama_barang, id_kategori, id_supplier, id_lokasi,
             stok, stok_minimum, harga, satuan, id_user)
            VALUES (:kode_barang, :nama_barang, :id_kategori, :id_supplier, :id_lokasi,
             :stok, :stok_minimum, :harga, :satuan, :id_user)";
        $this->db->query($query);
        $this->db->bind('kode_barang', $data['kode_barang']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->bind('id_supplier', $data['id_supplier']);
        $this->db->bind('id_lokasi', $data['id_lokasi']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('stok_minimum', $data['stok_minimum']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->execute();

        return $this->db->rowCount();
    }
 
    public function updateDataBarang($data)
    {
        $this->db->query('UPDATE barang SET
            kode_barang=:kode, nama_barang=:nama, id_kategori=:kategori,
            id_supplier=:supplier, id_lokasi=:lokasi, stok=:stok, stok_minimum=:stok_min,
            harga=:harga, satuan=:satuan, id_user=:id_user WHERE id_barang=:id');
        $this->db->bind(':kode', $data['kode_barang']);
        $this->db->bind(':nama', $data['nama_barang']);
        $this->db->bind(':kategori', $data['id_kategori']);
        $this->db->bind(':supplier', $data['id_supplier']);
        $this->db->bind(':lokasi', $data['id_lokasi']);
        $this->db->bind(':stok', $data['stok']);
        $this->db->bind(':stok_min', $data['stok_minimum']);
        $this->db->bind(':harga', $data['harga']);
        $this->db->bind(':satuan', $data['satuan']);
        $this->db->bind(':id_user', $data['id_user']);
        $this->db->bind(':id', $data['id_barang']);
        $this->db->execute();

        return $this->db->rowCount();
    }
 
    public function deleteBarang($id)
    {
        $this->db->query('DELETE FROM barang WHERE id_barang = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }
 
    public function cariBarang($keyword)
    {
        $this->db->query($this->baseQuery . ' WHERE b.nama_barang LIKE :keyword
                           OR b.kode_barang LIKE :keyword ORDER BY b.id_barang DESC');
        $this->db->bind(':keyword', '%' . $keyword . '%');
        return $this->db->resultSet();
    }
 
    public function barangStokMenipis()
    {
        $this->db->query($this->baseQuery . ' WHERE b.stok <= b.stok_minimum');
        return $this->db->resultSet();
    }
 
}