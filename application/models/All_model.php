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
	public function update_gallery($data){
		echo PRE;
		$id['id']=$data['id'];
		$gallery['image']= $data['image'];
		$qry = $this->db->update('dot_gallery',$gallery , $id);
		
		if ($qry == true) {
			return true;
		}
		else{
			return false;
		}

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
	public function update_banner($data){
		$id['pid']=$data['id'];
		$banner['image']= $data['image'];
		$qry = $this->db->update('dot_banner',$banner , $id);
		if ($qry == true) {
			return true;
		}
		else{
			return false;
		}

	}
  




	// important for html name value notice_board and database table attrribute name different and show this type to fetch
	public function insert_notice($data){
	$abc['notice'] = $data['notice_board'];
	$abc['noticefile'] = $data['image'];
	$abc['date']=date('Y-m-d');
	$qry = $this->db->insert('dot_notice', $abc);
	 if($qry==true){
	 	return true;
	 }
	 else{
	 	return false;
	 }
	}

	public function list_notice(){
		$table = "dot_notice";
		//print_r($table);die;
		$query = $this->db->get($table);
		$tables=[];
		if($query->num_rows()>0){
			$tables =$query->result_array();
		}
		return $tables;
	}
     public function update_notice($data)
	{

		$id['pid']=$data['id'];
		$notice['notice']=$data['notice'];
		$notice['noticefile'] = $data['image'];
		$qry=$this->db->update('dot_notice', $notice, $id);
		if ($qry == true) {
			return true;
		}
		else{
			return false;
		}
	}
	public function insert_about($data){
		$data['vision'] = $data['vision'];
		$data['instruction'] = $data['instruction'];
		$data['date'] = date('Y-m-d');
		$qry = $this->db->insert('dot_about', $data);
		if($qry == true){
			return true;
		}
		else{
			return false;
		}
	}

    public function list_about(){
    	$table = "dot_about";
    	$query = $this->db->get($table);
    	$tables=[];
    	if($query->num_rows()>0){
    		$tables = $query->result_array();
    	}
    	return $tables;
    }

     public function update_about($data){
            $id = $data['sno'];
            // $about=$data['uptabout'];
            $about['vision'] = $data['uptabout'];
            $about['instruction'] = $data['uptinstruction'];
            // $about['about']= $data['uptabout'];
            //  $qry = $this->db->update('dot_about',$about,array('pid'=>$id));   
            $qry = $this->db->update('dot_about', $about ,array('pid'=>$id));
            if($qry==true){
              return true;
            }
            else{
              return false;
          }
      }
      public function delete_banners($data){
        $this->db->where('pid',$data);
        $qry = $this->db->delete('dot_banner');
          if($qry==true){
            return true;
          }
          else{
            return false;
          }
      }

      public function delete_notices($data){
        $this->db->where('pid',$data);
        $qry = $this->db->delete('dot_notice');
          if($qry==true){
            return true;
          }
          else{
            return false;
          }
      }




        public function delete_abouts($data){
        $this->db->where('pid',$data);
        $qry = $this->db->delete('dot_about');
          if($qry==true){
            return true;
          }
          else{
            return false;
          }
      }
        public function delete_gallerys($data){
        $this->db->where('id',$data);
        $qry = $this->db->delete('dot_gallery');
          if($qry==true){
            return true;
          }
          else{
            return false;
          }
      }
}