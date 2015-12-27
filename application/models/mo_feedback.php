<?php 
/**
* create by Sutthida (Alizzabeth)
* this model is used for connect database, retrieve data and insert data
*/

class mo_feedback extends CI_Model{
    public function showFeedback($id){
        $condition = array('id_contact'=>$id);
		$query = $this->db->get_where('feedback', $condition);
		$result = $query->result();
		return $result;
    }
    
    public function insert($data){
        $this->db->insert('feedback', $data);
    }
}

?>