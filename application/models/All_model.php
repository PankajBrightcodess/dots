<?php
class All_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
		//$this->db->db_debug = false;
	}
	
	public function gettables(){
		$query=$this->db->query("Show Tables");
		$tables=[];
		if($query->num_rows()>0){
			$tables=$query->result_array();
		}
		return $tables;
	}
	
	public function getcolumns($table){
		$query=$this->db->query("Show Columns from $table");
		$columns=[];
		if($query->num_rows()>0){
			$columns=$query->result_array();
		}
		return $columns;
	}
	
	public function getdata($table){
		$query=$this->db->get($table);
		$data=[];
		if($query->num_rows()>0){
			$data=$query->result_array();
		}
		return $data;
	}
	
	public function updatedata($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	public function insert_gallery($data){
		$data['added_on']=date('Y-m-d');

	$qry = $this->db->insert('dot_gallery', $data);
	 if($qry==true){
	 	return true;
	 }
	 else{
	 	return false;
	 }
	}

    public function list_gallery(){
		$table = "dot_gallery";
		$query=$this->db->get($table);
		// print_r($query);die;
		$tables=[];
		if($query->num_rows()>0){
			$tables=$query->result_array();
		}
		return $tables;
	}
	public function insert_banner($data){
		$data['date']=date('Y-m-d');

	$qry = $this->db->insert('dot_banner', $data);
	 if($qry==true){
	 	return true;
	 }
	 else{
	 	return false;
	 }
	}

	public function list_banner(){
		$table =  "dot_banner";
		$query = $this->db->get($table);
		$tables=[];
		if($query->num_rows()>0){
			$tables= $query->result_array();
		}
		return $tables;
	}





	// important for html name value notice_board and database table attrribute name different and show this type to fetch
	public function insert_notice($data){
	$abc['notice'] = $data['notice_board'];
	$abc['date']=date('Y-m-d');
	$qry = $this->db->insert('dot_notice', $abc);
	 if($qry==true){
	 	return true;
	 }
	 else{
	 	return false;
	 }
	}
	public function insert_about($data){
		$data['date'] = date('Y-m-d');
		$qry = $this->db->insert('dot_about', $data);
		if($qry == true){
			return true;
		}
		else{
			return false;
		}
	}


}