<?php namespace App\Models;
use CodeIgniter\Model;

class TahunModel extends Model{
    protected $table = 'tahun';
    protected $primaryKey = 'tahunid';
    protected $allowedFields = ['tahun','capaian'];

    public function getTahun(){
        $buider = $this->db->table('tahun');
        return $buider->get();
    }

    public function getTahunByDesc(){
        $buider = $this->db->table('tahun')->orderBy('tahun', 'DESC');
        return $buider->get();
    }

    public function getTahunById($id){
        $buider = $this->db->table('tahun')->where('tahunid', $id);
        return $buider->get();
    }

    public function saveTahun($data){
        $query = $this->db->table('tahun')->insert($data);
        return $query;
    }

    public function updateTahun($data, $id){
        $query = $this->db->table('tahun')->update($data, array('tahunid' => $id));
        return $query;
    }

    public function deleteTahun($id){
        $query = $this->db->table('tahun')->delete(array('tahunid' => $id));
        return $query;
    }
}