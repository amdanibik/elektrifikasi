<?php namespace App\Models;
use CodeIgniter\Model;

class KecamatanModel extends Model{
    protected $table = 'kecamatan';
    protected $primaryKey = 'kecamatanid';
    protected $allowedFields = ['kabupaten_id','namakecamatan'];

    public function getKecamatan(){
        // $buider = $this->db->table('kecamatan');
        $db = \Config\Database::connect();
        $buider = $db->table('kecamatan');
        $buider->select('*');
        $buider->join('kabupaten', 'kecamatan.kabupaten_id = kabupaten.id');
        return $buider->get();
    }

    public function getKecamatanByName(){
        // $buider = $this->db->table('kecamatan');
        $db = \Config\Database::connect();
        $buider = $db->table('kecamatan');
        $buider->select('*');
        $buider->join('kabupaten', 'kecamatan.kabupaten_id = kabupaten.id');
        $buider->orderBy('namakecamatan', 'ASC');
        return $buider->get();
    }

    public function saveKecamatan($data){
        $query = $this->db->table('kecamatan')->insert($data);
        return $query;
    }

    public function updateKecamatan($data, $id){
        $query = $this->db->table('kecamatan')->update($data, array('kecamatanid' => $id));
        return $query;
    }

    public function deleteKecamatan($id){
        $query = $this->db->table('kecamatan')->delete(array('kecamatanid' => $id));
        return $query;
    }
}