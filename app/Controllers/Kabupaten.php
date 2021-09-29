<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\KabupatenModel;

class Kabupaten extends Controller{
    public function index(){
        $model = new KabupatenModel();
        $data['list_kab'] = $model->getKabupaten()->getResult();
        echo view('view_kabupaten', $data);
    }

    public function tambah(){
        $model = new KabupatenModel();
        $data = array(
            'namakabupaten' => $this->request->getPost('nama'),
            'jenis' => $this->request->getPost('jenis'),
        );
        if ($model->saveKabupaten($data)) {
            session()->setFlashdata('notif', 'successkab');
            return redirect()->to('/kabupaten');
        } else {
            session()->setFlashdata('notif', 'failedkab');
            return redirect()->to('/kabupaten');
        }
    }

    public function ubah(){
        $model = new KabupatenModel();
        $id = $this->request->getPost('id');
        $data = array(
            'namakabupaten' => $this->request->getPost('nama'),
            'jenis' => $this->request->getPost('jenis'),
        );
        if ($model->updateKabupaten($data, $id)) {
            session()->setFlashdata('notif', 'successkabe');
            return redirect()->to('/kabupaten');
        } else {
            session()->setFlashdata('notif', 'failedkab');
            return redirect()->to('/kabupaten');
        }
    }

    public function hapus(){
        $model = new KabupatenModel();
        $id = $this->request->getPost('id');
        if ($model->deleteKabupaten($id)) {
            session()->setFlashdata('notif', 'successkabh');
            return redirect()->to('/kabupaten');
        } else {
            session()->setFlashdata('notif', 'failedkab');
            return redirect()->to('/kabupaten');
        }
    }
}