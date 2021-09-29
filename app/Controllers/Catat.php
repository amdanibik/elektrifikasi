<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DesaModel;
use App\Models\TahunModel;
use App\Models\StatusModel;
use App\Models\CatatModel;

class Catat extends Controller{
    public function index(){
        $model = new TahunModel();
        $data['list_tahun'] = $model->getTahunByDesc()->getResult();
        echo view('view_catat', $data);
    }

    public function lihat($id){
        $model = new TahunModel();
        $modeldesa = new DesaModel();
        $modelst = new StatusModel();
        $data['detail_tahun'] = $model->getTahunById($id)->getResult();
        $data['list_desaclear'] = $modeldesa->getDesaClear($id)->getResult();
        $data['list_status'] = $modelst->getStatus()->getResult();
        $data['list_desawsts'] = $modeldesa->getDesaWithStatus($id)->getResult();
        echo view('view_catat_tahun', $data);
    }

    public function tambah(){
        $model = new CatatModel();
        $id = $this->request->getPost('tahun');
        $data = array(
            'idtahun' => $this->request->getPost('tahun'),
            'iddesa' => $this->request->getPost('desa'),
            'idstatus' => $this->request->getPost('status'),
        );
        if ($model->saveCatat($data)) {
            session()->setFlashdata('notif', 'successcat');
            return redirect()->to('/catat/'.$id.'/lihat');
        } else {
            session()->setFlashdata('notif', 'failedcat');
            return redirect()->to('/catat/'.$id.'/lihat');
        }
    }

    public function hapus(){
        $model = new CatatModel();
        $id = $this->request->getPost('id');
        $idth = $this->request->getPost('idth');
        if ($model->deleteCatat($id)) {
            session()->setFlashdata('notif', 'successcath');
            return redirect()->to('/catat/'.$idth.'/lihat');
        } else {
            session()->setFlashdata('notif', 'failedcat');
            return redirect()->to('/catat/'.$idth.'/lihat');
        }
    }
}