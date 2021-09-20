<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    /** Constructor */
    public function __construct()
	{
        parent::__construct();
        $this->load->database();
        $this->load->model('Admin_model','m1');
	}
    
    /** Check session is available or not! If not available than redirect to Login Page*/
	public function checkUserSession()
	{
		$status = $this->session->userdata('sessionStatus');
		if(!isset($status)){
			redirect('Admin/loadLoginPage');
		}
	}

    /** Check Valid user is inserted or note */
    public function checkLogin()
    {
        $userName = $this->input->post('txtEmail');
		$password = $this->input->post('txtPassword');
		$data['loginData'] = $this->m1->checkLogin($userName,$password);
		echo $data['loginData'][0]['name'];
		if ($data['loginData'][0]['Total'] == 1){
			$this->session->set_userdata('email', $data['loginData'][0]['email']);
			$this->session->set_userdata('name', $data['loginData'][0]['name']);
			$this->session->set_userdata('type', $data['loginData'][0]['type']);
			$this->session->set_userdata('sessionStatus', '1');			
			$this->session->set_flashdata('welcome', 'Successfully Login!');
			redirect('Admin/index');
		}
		else{
			$this->session->set_flashdata('error', 'Invalid Username or Password');
			redirect('Admin/loadLoginPage');
		}
    }

    /** Logout */
	public function logout()
	{
		$this->session->sess_destroy();		
		$this->session->set_flashdata('logout', 'Successfully logout');		
		redirect('Admin/loadLoginPage');
	}

    /** Load Login Page */
	public function loadLoginPage()
	{
		$this->load->view('admin/login');
	}

	public function index()
	{
        $this->checkUserSession();
        $data['title'] = "Dashboard";
		$this->load->view('admin/index',$data);
	}
    
    public function manageCareer()
    {
        $this->checkUserSession();
        $data['title'] = "Career Manage";
		$data['icons'] = $this->m1->get_selected_from_join_where_groupby_orderby('*','flaticon',[],[],'','',[]);
		$selectData = array(
			'k.id AS ID',			
			'k.category',
			'k.location',
			'k.experience',
			'k.qualification',
			'k.status',
			'f.icon_name'
		);
		$fromTable = "kpi_career_cat as k";
		$joinTable = array(
			"flaticon as f" => "f.id = k.icon"
		);
		$data['careers'] = $this->m1->getAllDataJoin($selectData,$fromTable,$joinTable,[],'k.id','desc');
		// echo "<prE>";
		// print_r($data);
		// echo "</prE>";
        $this->load->view('admin/career',$data);       
    }

	public function addCareer()
	{
		
        $this->checkUserSession();
		$checkBox = $this->input->post('checkConfirmation');
		$status = isset($checkBox)?'1':'0';
		$icon = $this->input->post('dropIcon');
		$category = $this->input->post('txtCategory');
		$location = $this->input->post('txtLocation');
		$experience = $this->input->post('txtExperience');
		$qualification = $this->input->post('txtQualification');
		$insertedData = array(
			'icon' =>  $icon,
			'category' => $category,
			'location' =>  $location,
			'experience' => $experience,
			'qualification' => $qualification,
			'status' => $status
		);
		$this->m1->insertData('kpi_career_cat',$insertedData);
		$this->session->flashdata('insert',"Data is inserted successfully");
		redirect('Admin/manageCareer','referesh');
	}

    /** ------------------- FILE UPLOAD CODE ----------------- */
	/*public function index()
	{
			$this->load->view('upload_form', array('error' => ' ' ));
	}

	public function do_upload()
	{
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
					$error = array('error' => $this->upload->display_errors());

					$this->load->view('upload_form', $error);
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());

					$this->load->view('upload_success', $data);
			}
	}*/

	/** ------------------- EMAIL CODE -------------------- */
	/*	
		$this->load->library('email');

		$this->email->from('your@example.com', 'Your Name');
		$this->email->to('someone@example.com');
		$this->email->cc('another@another-example.com');
		$this->email->bcc('them@their-example.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();
	*/
}
