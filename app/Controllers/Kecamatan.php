<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\KecamatanModel;
use App\Models\KabupatenModel;

class Kecamatan extends Controller{
    public function index(){
        $model = new KecamatanModel();
        $modelkab = new KabupatenModel();
        $data['list_kec'] = $model->getKecamatan()->getResult();
        $data['list_kab'] = $modelkab->getKabupatenByname()->getResult();
        echo view('view_kecamatan', $data);
    }

    public function tambah(){
        $model = new KecamatanModel();
        $data = array(
            'kabupaten_id' => $this->request->getPost('kabupaten_id'),
            'namakecamatan' => $this->request->getPost('nama'),
        );
        if ($model->saveKecamatan($data)) {
            session()->setFlashdata('notif', 'successkec');
            return redirect()->to('/kecamatan');
        } else {
            session()->setFlashdata('notif', 'failedkec');
            return redirect()->to('/kecamatan');
        }
    }

    public function ubah(){
        $model = new KecamatanModel();
        $id = $this->request->getPost('id');
        $data = array(
            'kabupaten_id' => $this->request->getPost('kabupaten_id'),
            'namakecamatan' => $this->request->getPost('nama'),
        );
        if ($model->updateKecamatan($data, $id)) {
            session()->setFlashdata('notif', 'successkece');
            return redirect()->to('/kecamatan');
        } else {
            session()->setFlashdata('notif', 'failedkec');
            return redirect()->to('/kecamatan');
        }
        
    }

    public function hapus(){
        $model = new KecamatanModel();
        $id = $this->request->getPost('id');
        if ($model->deleteKecamatan($id)){
            session()->setFlashdata('notif', 'successkech');
            return redirect()->to('/kecamatan');
        } else {
            session()->setFlashdata('notif', 'failedkec');
            return redirect()->to('/kecamatan');
        }
    }
}