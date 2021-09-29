<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\StatusModel;

class Status extends Controller{
    public function index(){
        $model = new StatusModel();
        $data['list_status'] = $model->getStatus()->getResult();
        echo view('view_status', $data);
    }

    public function tambah(){
        $model = new StatusModel();
        $data = array(
            'namastatus' => $this->request->getPost('status'),
            'listrik' => $this->request->getPost('listrik'),
        );
        if ($model->saveStatus($data)) {
            session()->setFlashdata('notif', 'successsta');
            return redirect()->to('/status');
        } else {
            session()->setFlashdata('notif', 'failedsta');
            return redirect()->to('/status');
        }
    }

    public function ubah(){
        $model = new StatusModel();
        $id = $this->request->getPost('id');
        $data = array(
            'namastatus' => $this->request->getPost('status'),
            'listrik' => $this->request->getPost('listrik'),
        );
        if ($model->updateStatus($data, $id)) {
            session()->setFlashdata('notif', 'successstae');
            return redirect()->to('/status');
        } else {
            session()->setFlashdata('notif', 'failedsta');
            return redirect()->to('/status');
        }
    }

    public function hapus(){
        $model = new StatusModel();
        $id = $this->request->getPost('id');
        if ($model->deleteStatus($id)) {
            session()->setFlashdata('notif', 'successstah');
            return redirect()->to('/status');
        } else {
            session()->setFlashdata('notif', 'failedsta');
            return redirect()->to('/status');
        }
    }
}