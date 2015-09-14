<?php 
/**
* create by Sutthida (Alizzabeth)
* this model is used for connect database, retrieve data and insert data
*/
class mo_contact extends CI_Model{	
    
	public function searchAll()
	{
		$query = $this->db->get('contacts');
		$result = $query->result();
		return $result;
	}
    
    public function searchAllType($key){
        $key = '%'.$key.'%';
        $sql = "SELECT * FROM Contacts WHERE first_name like'".$key."' union SELECT * FROM Contacts WHERE last_name like '".$key."' union SELECT * FROM Contacts WHERE company like'".$key."' union SELECT * FROM Contacts WHERE job like'".$key."';";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    
    public function searchByName($name)
	{
		$key = '%'.$name.'%';
		$sql = "SELECT * FROM Contacts WHERE first_name like'".$key."' union SELECT * FROM Contacts WHERE last_name like '".$key."';";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}
    
    public function searchByCompany($company)
	{
		$key = '%'.$company.'%';
		$sql = "SELECT * FROM Contacts WHERE company like'".$key."';";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}
    
    public function searchByJob($job)
	{
		$key = '%'.$job.'%';
		$sql = "SELECT * FROM Contacts WHERE job like'".$key."';";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}
    
    public function searchById($id)
	{
        $condition = array('id'=>$id);
		$query = $this->db->get_where('contacts', $condition);
		$result = $query->row();
		return $result;
	}
    
    public function get_all_num_row(){
        return $this->db->count_all('contacts');
    }
    
    public function update($id, $first_name,$last_name,$job,$job_description,$company,$url,$address,$postcode,$telephone,$mobile,$fax,$email){
		$sql = 'UPDATE contacts SET first_name = "'.$first_name.'", last_name = "'.$last_name.'", company = "'.$company.'", address = "'.$address.'", postcode = "'.$postcode.'", telephone = "'.$telephone.'", mobile = "'.$mobile.'", fax = "'.$fax.'", email = "'.$email.'", url_web = "'.$url.'", job = "'.$job.'", job_description = "'.$job_description.'" WHERE id = "'.$id.'";';
		$this->db->query($sql);
	}

}
 ?>