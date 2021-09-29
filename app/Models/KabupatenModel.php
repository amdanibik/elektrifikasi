<?php namespace App\Models;
use CodeIgniter\Model;

class KabupatenModel extends Model{
    protected $table = 'kabupaten';
    protected $primaryKey = 'id';
    protected $allowedFields = ['namakabupaten','jenis'];

    public function getKabupaten(){
        $buider = $this->db->table('kabupaten');
        return $buider->get();
    }

    public function getKabupatenByname(){
        $buider = $this->db->table('kabupaten')->orderBy('namakabupaten', 'ASC');
        return $buider->get();
    }

    public function saveKabupaten($data){
        $query = $this->db->table('kabupaten')->insert($data);
        return $query;
    }

    public function updateKabupaten($data, $id){
        $query = $this->db->table('kabupaten')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteKabupaten($id){
        $query = $this->db->table('kabupaten')->delete(array('id' => $id));
        return $query;
    }
}