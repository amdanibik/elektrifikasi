<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Login extends Controller{
    public function index(){
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('pass');
        if ($email == "admin@admin.com" && $pass == "superpass"){
            return redirect()->to('/kabupaten');
        } else {
            return redirect()->to('/');
        }
    }
}