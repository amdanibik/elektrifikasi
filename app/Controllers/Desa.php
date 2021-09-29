<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DesaModel;
use App\Models\KecamatanModel;
use App\Models\KabupatenModel;

class Desa extends Controller{
    public function index(){
        $model = new DesaModel();
        $modelkec = new KecamatanModel();
        $modelkab = new KabupatenModel();
        $data['list_desa'] = $model->getDesa()->getResult();
        $data['list_kec'] = $modelkec->getKecamatanByname()->getResult();
        $data['list_kab'] = $modelkab->getKabupatenByname()->getResult();
        echo view('view_desa', $data);
    }

    public function action(){
        if($this->request->getVar('action'))
		{
			$action = $this->request->getVar('action');

			if($action == 'get_kec')
			{
				$kecModel = new KecamatanModel();

				$kecdata = $kecModel->where('kabupaten_id', $this->request->getVar('kabupaten_id'))->findAll();

				echo json_encode($kecdata);
			}
        }
    }

    public function getKecamatan(){
        $db = \Config\Database::connect();
        $kab_id = $this->request->getVar("kab_id");
        $kec_list = $this->db->query("SELECT kecamatanid, namakecamatan FROM kecamatan WHERE kabupaten_id = ".$kab_id);
        return json_encode($kec_list);
    }

    public function tambah(){
        $model = new DesaModel();
        $data = array(
            'kabupaten_id' => $this->request->getPost('kabupaten'),
            'kecamatan_id' => $this->request->getPost('kecamatan'),
            'namadesa' => $this->request->getPost('nama'),
            'jenisdesa' => $this->request->getPost('jenis'),
        );
        if ($model->saveDesa($data)) {
            session()->setFlashdata('notif', 'successdes');
            return redirect()->to('/desa');
        } else {
            session()->setFlashdata('notif', 'faileddes');
            return redirect()->to('/desa');
        }
    }

    public function ubah(){
        $model = new DesaModel();
        $id = $this->request->getPost('id');
        $data = array(
            'kabupaten_id' => $this->request->getPost('kabupaten'),
            'kecamatan_id' => $this->request->getPost('kecamatan'),
            'namadesa' => $this->request->getPost('nama'),
            'jenisdesa' => $this->request->getPost('jenis'),
        );
        if ($model->updateDesa($data, $id)) {
            session()->setFlashdata('notif', 'successdese');
            return redirect()->to('/desa');
        } else {
            session()->setFlashdata('notif', 'faileddes');
            return redirect()->to('/desa');
        }
        
    }

    public function hapus(){
        $model = new DesaModel();
        $id = $this->request->getPost('id');
        if ($model->deleteDesa($id)){
            session()->setFlashdata('notif', 'successdesh');
            return redirect()->to('/desa');
        } else {
            session()->setFlashdata('notif', 'faileddes');
            return redirect()->to('/desa');
        }
    }
}