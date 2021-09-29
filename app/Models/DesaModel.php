<?php namespace App\Models;
use CodeIgniter\Model;

class DesaModel extends Model{
    protected $table = 'desa';

    public function getDesa(){
        // $buider = $this->db->table('desa');
        $db = \Config\Database::connect();
        $buider = $db->table('desa');
        $buider->select('desa.desaid, desa.namadesa, desa.jenisdesa, desa.kecamatan_id, desa.kabupaten_id');
        $buider->select('kecamatan.kecamatanid, kecamatan.namakecamatan');
        $buider->join('kecamatan', 'desa.kecamatan_id = kecamatan.kecamatanid');
        $buider->select('kabupaten.id, kabupaten.namakabupaten, kabupaten.jenis');
        $buider->join('kabupaten', 'desa.kabupaten_id = kabupaten.id');
        return $buider->get();
    }

    public function getDesaWithStatus($id){
        $db = \Config\Database::connect();
        $buider = $db->table('catat');
        $buider->select('catat.idcatat, catat.iddesa, catat.idtahun, catat.idstatus');
        $buider->select('status.statusid, status.namastatus');
        $buider->join('status', 'catat.idstatus = status.statusid');
        $buider->select('desa.desaid, desa.namadesa, desa.jenisdesa, desa.kecamatan_id, desa.kabupaten_id');
        $buider->join('desa', 'catat.iddesa = desa.desaid');
        $buider->select('kecamatan.kecamatanid, kecamatan.namakecamatan');
        $buider->join('kecamatan', 'desa.kecamatan_id = kecamatan.kecamatanid');
        $buider->select('kabupaten.id, kabupaten.namakabupaten, kabupaten.jenis');
        $buider->join('kabupaten', 'desa.kabupaten_id = kabupaten.id');
        $buider->where('catat.idtahun = '.$id.'');
        return $buider->get();
    }

    public function getDesaClear($id){
        $db = \Config\Database::connect();
        $buider = $db->table('desa');
        $buider->select('desa.desaid, desa.namadesa, desa.jenisdesa, desa.kecamatan_id, desa.kabupaten_id');
        $buider->select('kecamatan.kecamatanid, kecamatan.namakecamatan');
        $buider->join('kecamatan', 'desa.kecamatan_id = kecamatan.kecamatanid');
        $buider->select('kabupaten.id, kabupaten.namakabupaten, kabupaten.jenis');
        $buider->join('kabupaten', 'desa.kabupaten_id = kabupaten.id');
        return $buider->get();
    }

    public function saveDesa($data){
        $query = $this->db->table('desa')->insert($data);
        return $query;
    }

    public function updateDesa($data, $id){
        $query = $this->db->table('desa')->update($data, array('desaid' => $id));
        return $query;
    }

    public function deleteDesa($id){
        $query = $this->db->table('desa')->delete(array('desaid' => $id));
        return $query;
    }
}