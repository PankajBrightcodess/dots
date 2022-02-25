<?php
class Website_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
		$this->db->db_debug = false;
	}
	
	public function createuser($data){
		$table=TP."members";
		$salt=random_string('alnum', 16);
		$password=md5($data['password'].SITE_SALT.$salt);
		$data['vp']=$data['password'];
		$data['password']=$password;
		$data['salt']=$salt;
        $data['status']=1;
        $data['username'] = $data['mobile'];
		$data['created_on']=date('Y-m-d H:i:s');
		$data['updated_on']=date('Y-m-d H:i:s');
		if(!empty($data['mobile'])){
			$this->db->where(['mobile'=>$data['mobile']]);
			$this->db->select("id");
			$qry = $this->db->from($table);
			if($qry->get()->num_rows()>0){
				return false;
				}
				else{
					if($this->db->insert($table,$data)){
						return true;
				}
			}
		}
	}
	public function chanegpassword_model($data){
		$id = $data['id'];
		$table=TP."members";
		$salt=random_string('alnum',16);
		$password=md5($data['password'].SITE_SALT.$salt);
		$final['vp']=$data['password'];
		$final['password']=$password;
		$final['salt']=$salt;
		if(!empty($final)){
			$this->db->where('id',$id);
			$this->db->update($table,$final);
		}



	}
	public function getmobiledetails($data){
		$table=TP."members";
		$mobile=$data['mobile'];
		$this->db->where(['mobile'=>$data['mobile']]);
		$this->db->select("id");
		$qry = $this->db->from($table);
		 $final =  $qry->get()->row_array();
		if(!empty($final['id'])){
			return $final;
			}
			else{
				return false;
			}
	}

	public function login($data){

		$table=TP."members";
		$username=$data['username'];		
		$password=$data['password'];
		$this->db->where('username', $username);
		$query = $this->db->get($table);
		$result=$query->unbuffered_row('array');
		if(!empty($result)){
			$salt=$result['salt'];
			$password=md5($password.SITE_SALT.$salt);
			$hashpassword=$result['password'];
			if($password==$hashpassword && $result['status']==1){
				$result['verify']=true;
			}
		}
		if(!isset($result['verify'])){ $result=array('verify'=>"Wrong Credentials!"); }

		return $result;
	}
	public function findstudent($aadhar){
		$this->db->where(['aadhar'=>$aadhar,'payment_status'=>1]);
		$this->db->select('id');
		$this->db->from('dot_registration');
		return $this->db->get()->result_array();
	}

	public function registrationmodel($data){
		
	 $added_on = date('Y-m-d');
	 $length = 15;
	 $order_no=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
	 $final = array();
	 $final['name']=$data['name'];
	 $final['fname']=$data['fname'];
	 $final['dob']=$data['dob'];
	 $final['aadhar']=$data['aadhar'];
	 $final['mname']=$data['mname'];
	 $final['address']=$data['address'];
	 $final['pincode']=$data['pincode'];
	 $final['school']=$data['school'];
	 $final['class']=$data['class'];
	 $final['roll']=$data['roll'];
	 $final['collage']=$data['collage'];
	 $final['course']=$data['course'];
	 $final['session']=$data['session'];
	 $final['contect']=$data['contect'];
	 $final['added_on'] = $added_on;
	 $final['order_no'] = $order_no;
	 $final['amount']=200;
	 $qry = $this->db->insert('dot_registration', $final);
	 if($qry==true){
	 	return $last_id = $this->db->insert_id();
	 }
	 else{
	 	return false;
	 }
	 
	}

	public function fatchregisteredrecord($id){
		$table=TP."registration";
		
		$this->db->where(['id'=>$id]);
		$this->db->select("*");
		$qry = $this->db->from($table);
		 $final =  $qry->get()->row_array();
		if(!empty($final)){
			return $final;
			}
			else{
				return false;
			}
	}

	public function update_form($id,$payment_status,$payment_details,$razorpay_payment_id){
		$table=TP."members";
		$payment_details = json_encode($payment_details);
		$final['payment_status'] = $payment_status;
		$final['payment_id'] = $razorpay_payment_id;
		$final['payment_details'] = $payment_details;
		// echo PRE;
		// print_r($id);
		// print_r($final);die;
		$this->db->where('id',$id);
		$sql = $this->db->update('dot_registration',$final);
		if($sql==true){
			return true;
		}
		else{
			return false;
		}

				// $sql="UPDATE $table SET payment_status = '$payment_status',payment_id = '$razorpay_payment_id', payment_details = '$payment_details' WHERE `id`='$id'";
		
	}


}