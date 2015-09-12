<?php
/**
* create by Sutthida (Alizzabeth)
* this model is used for connect database, retrieve data and insert data
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class co_contact extends CI_Controller {

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
    
}
