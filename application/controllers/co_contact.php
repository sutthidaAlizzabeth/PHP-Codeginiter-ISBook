<?php
/**
* create by Sutthida (Alizzabeth)
* this model is used for connect database, retrieve data and insert data
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class co_contact extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function search()
	{
		$key = $this->input->post('key');
        $type = $this->input->post('type');
        
        $this->load->model('mo_contact');
        if ($type == 'name') {
            $result['data'] = $this->mo_contact->searchByName($key);
        } elseif ($type == 'company'){
            $result['data'] = $this->mo_contact->searchByCompany($key);
        } elseif ($type == 'job'){
            $result['data'] = $this->mo_contact->searchByJob($key);
        } else{
            $result['data'] = $this->mo_contact->searchAllType($key);
        }
        
        
        $result['key'] = $key;
        $this->load->view('index', $result);
	}
    
    public function single_contact($id){
        $this->load->model('mo_contact');
        $result['data'] = $this->mo_contact->searchById($id);
        
        $this->load->model('mo_feedback');
        $result['feedback'] = $this->mo_feedback->showFeedback($id);
        $this->load->view('contact_view', $result);
    }
    
    public function edit_contact($id){
        $this->load->model('mo_contact');
        $result['data'] = $this->mo_contact->searchById($id);
        $this->load->view('contact_edit', $result);
    }
    
    public function update_contact(){
        $id = $this->input->post('id');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $company = $this->input->post('company');
        $url = $this->input->post('url');
        $job_description = $this->input->post('job_description');
        $job = $this->input->post('job');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $telephone = $this->input->post('telephone');
        $fax = $this->input->post('fax');
        $postcode = $this->input->post('postcode');
        $address = $this->input->post('address');
        
        $this->load->model('mo_contact');

        //image
        $config['upload_path'] = 'assets/image';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		//$config['max_size']	= '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';
        $config['file_name'] = $id;
        $config['overwrite'] = true;

		$this->load->library('upload', $config);
        

		if ( $this->upload->do_upload('url_namecard'))
		{
			$url_namecard = $id.'.png';
            $this->mo_contact->nameCard($id,$url_namecard);
		}
        //จบ image
        
        //echo var_dump($_FILES['url_namecard']);
        
        $this->mo_contact->update($id, $first_name,$last_name,$job,$job_description,$company,$url,$address,$postcode,$telephone,$mobile,$fax,$email);
        $result['message'] = "Success!!!";
        $result['id'] = $id;
        
        $this->load->view('result',$result);
    }
    
    
    public function view_insert(){
        $this->load->view('contact_insert_1');
    }
    
    public function insert(){
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $company = $this->input->post('company');
        $url = $this->input->post('url');
        $job_description = $this->input->post('job_description');
        $job = $this->input->post('job');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $telephone = $this->input->post('telephone');
        $fax = $this->input->post('fax');
        $postcode = $this->input->post('postcode');
        $address = $this->input->post('address');
        
        $this->load->model('mo_contact');
        $this->mo_contact->insert($first_name,$last_name,$job,$job_description,$company,$url,$address,$postcode,$telephone,$mobile,$fax,$email);
        //ดึง id ล่าสุด
        $result['data'] = $this->db->insert_id();
        $this->load->view('contact_insert_2',$result);
        
    }
    
    public function insert_namecard(){
        $this->load->model('mo_contact');
        $id = $this->input->post('id');
        //image
        $config['upload_path'] = 'assets/image';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		//$config['max_size']	= '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';
        $config['file_name'] = $id;
        $config['overwrite'] = true;

		$this->load->library('upload', $config);
        
        $image = false;
        $url_namecard = '0.jpg';

		if ( $this->upload->do_upload('url_namecard'))
		{
			$url_namecard = $id.'.png';
            $this->mo_contact->nameCard($id,$url_namecard);
		}
        //จบ image
        redirect('http://localhost/isbook/index.php/co_contact/single_contact/'.$id);
    }
}
