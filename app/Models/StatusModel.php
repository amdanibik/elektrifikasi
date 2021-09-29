<?php namespace App\Models;
use CodeIgniter\Model;

class StatusModel extends Model{
    protected $table = 'status';
    protected $primaryKey = 'statusid';
    protected $allowedFields = ['namastatus','listrik'];

    public function getStatus(){
        $buider = $this->db->table('status');
        return $buider->get();
    }

    public function getStatusByDesc(){
        $buider = $this->db->table('status')->orderBy('namastatus', 'DESC');
        return $buider->get();
    }

    public function saveStatus($data){
        $query = $this->db->table('status')->insert($data);
        return $query;
    }

    public function updateStatus($data, $id){
        $query = $this->db->table('status')->update($data, array('statusid' => $id));
        return $query;
    }

    public function deleteStatus($id){
        $query = $this->db->table('status')->delete(array('statusid' => $id));
        return $query;
    }
}