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
        $this->mo_contact->update($id, $first_name,$last_name,$job,$job_description,$company,$url,$address,$postcode,$telephone,$mobile,$fax,$email);

        $result['message'] = "Success!!!";
        $result['id'] = $id;
        
        $this->load->view('result',$result);
    }
    
    public function upload_image(){
        $id = $this->input->post('id');
        
        //เริ่มการอัพรูปเข้าไปใน folder /assets/image/
        $config['upload_path'] = 'assets/image/';
        $config['allowed_types'] = 'jpg';
        $config['max_size']	= '5200'; //kb
        $config['max_width']  = '1024'; //pixel
        $config['max_height']  = '1024'; //pixel
        $config['overwrite']  = TRUE;
        $config['file_name']  = $id;
        
        $this->load->library('upload', $config); //เรียกใช้ library ชื่อ upload
        
        //upload ที่เรียกใช้คือ library
        if ($this->upload->do_upload('url_namecard')){
            $data = $this->upload->data();
            $message = FALSE;
        }
        else{
            $message = "Try agian!!!";
        }
    }
}
