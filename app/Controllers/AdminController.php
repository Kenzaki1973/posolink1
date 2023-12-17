<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{

    private $registeremp;
    private $appli;
protected $db;

    public function __construct()
    {
        $this->registeremp = new \App\Models\EmployerRegistrationModel();
        $this->adminlogins = new \App\Models\AdminLoginModel();
        $this->jobvacancies = new \App\Models\PostjobModel();
        $this->appli = new \App\Models\ApplicantModel();
        $this->db = \Config\Database::connect();
    }

    


    
    public function adminhome()
    {
        $chartData = [
            'labels' => [],
            'datasets' => [
                [
                    'label' => 'Birth Rate',
                    'data' => [],
                    'fill' => false,
                    'borderColor' => 'rgb(255,0,0)',
                    'tension' => 0.1
                ]
            ]
        ];
        // Retrieve the remaining data from the database
        $db = db_connect();
        $query = $db->query('SELECT category, COUNT(*) AS total FROM applicant GROUP BY category');
        $categoryStatistics = $query->getResult();
    
    
        $data = [
            'count_a' => $this->appli->where('userverification', 'Approved')->get()->getNumRows(),
            'count_e' => $this->registeremp->where('status', 'Approved')->get()->getNumRows(),
            'count_em' => $this->appli->where('category', 'Employed')->get()->getNumRows(),
            'count_un' => $this->appli->where('category', 'Unemployed')->get()->getNumRows(),
            'categoryStatistics' => $categoryStatistics,
        ];
        return view('Admin/adminhome', $data);
    }

    // public function employerregister()
    // {
    //     return view('Admin/employerregistration');
    // }

    public function jobvacancy()
    {
        return view('Admin/jobvacancy');
    }

    public function empdetails($emp_id = null)
    {
        $data = [
            'viewEmp' => $this->registeremp->where('emp_id', $emp_id)->first(),
        ];
        return view('Admin/employerdetails', $data);
    }

    public function manageuser()
    {
        return view('Admin/manageuser');
    }

    public function registeremps()
    {
        $data = [
            'myregemp' => $this->registeremp->findAll(),
        ];
        return view('Admin/employerregistration', $data);
    }

    public function adminlogin()
    {
        echo view('Admin/adminlogin');
    } 

    public function adlogin()
    {
                
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
                
        $data = $this->adminlogins->where('username', $username)->first();
                
        var_dump($username);
        var_dump($password);
        var_dump($data);
                
        if ($data) {
            $pass = $data['password'];
            if ($password === $pass) {
                return redirect()->to('/adminhome');
                
            } 
            else {
                
                return redirect()->to('/adminlogin');
            }
        } else {

            return redirect()->to('/adminlogin');
        }
    }

    public function jobvacant()
    {
        $data = [
            'jobvacants' => $this->jobvacancies->findAll(),
        ];
        return view('Admin/jobvacancy', $data);
    }

    public function employer_approved($emp_id)
    {
      
        $this->registeremp->set('status', 'Approved')->where('emp_id', $emp_id)->update();

        return redirect()->route('employerregistration');
    }

    public function employer_decline($emp_id)
    {
      
        $this->registeremp->set('status', 'Decline')->where('emp_id', $emp_id)->update();

        return redirect()->route('employerregistration');
    }

    // public function empdetails($vacancy_id = null)
    // {
    //     $data = [
    //         'viewEmp' => $this->registeremp->where('vacancy_id', $vacancy_id)->first(),
    //     ];
    //     return view('Admin/employerdetails', $data);
    // }

    public function vacancydetails($vacancy_id = null)
    {
        $data = [
            'vacant' => $this->jobvacancies->where('vacancy_id', $vacancy_id)->first(),
        ];
        return view('Admin/vacancydetails', $data);
    }
    
    public function vacancy_approved($vacancy_id)
    {
      
        $this->jobvacancies->set('status', 'Approved')->where('vacancy_id', $vacancy_id)->update();

        return redirect()->route('jobvacancy');
    }

    public function vacancy_decline($vacancy_id)
    {
      
        $this->jobvacancies->set('status', 'Decline')->where('vacancy_id', $vacancy_id)->update();

        return redirect()->route('jobvacancy');
    }

    public function applicantinfo()
    {
        $data = [
            'applicants' => $this->appli->findAll(),
        ];
        return view('Admin/manageuser', $data);
    }
}