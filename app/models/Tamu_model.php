<?php

class Tamu_model {
private $table = 'pesanan';
private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

        public function getAllTamu()
        {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getTamuById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataTamu($data)
    {
        $query = "INSERT INTO pesanan
                    VALUES
                    ('', :nama_pemesan, :nik, :no_hp, :tempat_wisata, :dewasa, :anak, :tgl_bln_thn, :harga, :total)";

        $this->db->query($query);
        $this->db->bind('nama_pemesan', $data['nama_pemesan']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('tempat_wisata', $data['tempat_wisata']);
        $this->db->bind('dewasa', $data['dewasa']);
        $this->db->bind('anak', $data['anak']);
        $this->db->bind('tgl_bln_thn', $data['tgl_bln_thn']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('total', $data['total']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDataTamu($id)
    {
        $query = "DELETE FROM pesanan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }






}