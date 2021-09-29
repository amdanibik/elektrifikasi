<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TahunModel;

class Tahun extends Controller{
    public function index(){
        $model = new TahunModel();
        $data['list_tahun'] = $model->getTahun()->getResult();
        echo view('view_tahun', $data);
    }

    public function tambah(){
        $model = new TahunModel();
        $data = array(
            'tahun' => $this->request->getPost('tahun'),
            'capaian' => $this->request->getPost('capaian'),
        );
        if ($model->saveTahun($data)) {
            session()->setFlashdata('notif', 'successtah');
            return redirect()->to('/tahun');
        } else {
            session()->setFlashdata('notif', 'failedtah');
            return redirect()->to('/tahun');
        }
    }

    public function ubah(){
        $model = new TahunModel();
        $id = $this->request->getPost('id');
        $data = array(
            'tahun' => $this->request->getPost('tahun'),
            'capaian' => $this->request->getPost('capaian'),
        );
        if ($model->updateTahun($data, $id)) {
            session()->setFlashdata('notif', 'successtahe');
            return redirect()->to('/tahun');
        } else {
            session()->setFlashdata('notif', 'failedtah');
            return redirect()->to('/tahun');
        }
    }

    public function hapus(){
        $model = new TahunModel();
        $id = $this->request->getPost('id');
        if ($model->deleteTahun($id)) {
            session()->setFlashdata('notif', 'successtahh');
            return redirect()->to('/tahun');
        } else {
            session()->setFlashdata('notif', 'failedtah');
            return redirect()->to('/tahun');
        }
    }
}