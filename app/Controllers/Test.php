<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Test extends BaseController
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->pjmodel = new \App\Models\PostjobModel();
        $this->applimodel = new \App\Models\ApplicationModel();
        $this->applicantmodel = new \App\Models\ApplicantModel();
        $this->userModel = model('UserModel');
        $this->session = \Config\Services::session();
        $this->session->start();
        // $this->dompdf = new Dompdf();
        // require_once(ROOTPATH . 'vendor/autoload.php');
    }
    public function test()
    {
        $result=$this->pjmodel->get();
        var_dump($result);
    }

    public function vacancydetails($vacancy_id = null)
    {
        $data = [
            'vacant' => $this->pjmodel->where('vacancy_id', $vacancy_id)->first(),
        ];
        return view('test', $data);
    }
}
