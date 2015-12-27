<?php
/**
* create by Sutthida (Alizzabeth)
* this model is used for connect database, retrieve data and insert data
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class co_feedback extends CI_Controller {
    public function insert(){
        //retrive value from feedback form
        $level = $this->input->post('level');
        $user = $this->input->post('user');
        $feedback = $this->input->post('feedback');
        $id_contact = $this->input->post('id');
        //จบ retrive value from feedback form
        
        //put value into array
        $data = array(
            'level' => $level,
            'feedback_comment' => $feedback,
            'user' => $user,
            'id_contact' => $id_contact
        );
        //จบ put value into array
        
        //ส่งข้อมูลใน $data ไป insert ใน database
        $this->load->model('mo_feedback');
        $this->mo_feedback->insert($data);
        //จบ ส่งข้อมูลใน $data ไป insert ใน database
        
//กลับสู่หน้าแสดงรายละเอียด contact
        redirect('http://localhost/isbook/index.php/co_contact/single_contact/'.$id_contact);
    }
}