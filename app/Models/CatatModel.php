<?php namespace App\Models;
use CodeIgniter\Model;

class CatatModel extends Model{
    protected $table = 'catat';
    protected $primaryKey = 'idcatat';
    protected $allowedFields = ['iddesa','idtahun','idstatus'];

    public function getTahun(){
        $buider = $this->db->table('tahun');
        return $buider->get();
    }

    public function saveCatat($data){
        $query = $this->db->table('catat')->insert($data);
        return $query;
    }
    public function deleteCatat($id){
        $query = $this->db->table('catat')->delete(array('idcatat' => $id));
        return $query;
    }
}