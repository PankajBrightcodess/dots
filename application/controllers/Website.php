<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['title']="Home";
        $this->load->view('website/include/header-top');
        $this->load->view('website/include/topbar');
        $this->load->view('website/include/header');
        $this->load->view('website/pages/index',$data);
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');
	}

    public function login(){
        $data['title']="login";
        $this->load->view('website/include/header-top',$data);
        
        $this->load->view('website/pages/login');
        $this->load->view('website/include/footer-links');

    }
    public function register(){
        $data['title']="Register";
        $this->load->view('website/include/header-top',$data);
        $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/register');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');
    }
    public function entermobile(){
        $data['title']="Register";
        $this->load->view('website/include/header-top',$data);
        $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/entermobile');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');
    }
    public function createuser(){
            if(!empty($this->input->post())){
                $data=$this->input->post();
                unset($data['createuser']);
                $result = $this->Website_model->createuser($data);

                if($result==true){
                    redirect('website/register/');
                }
                else
                {
                    redirect('website/register/');
                }
		}
        else{
            redirect('website/register/');
        }
    }

    public function getmobileno(){
        if(!empty($this->input->post())){
            $data=$this->input->post();
            unset($data['submit']);
            $result = $this->Website_model->getmobiledetails($data);

                if(!empty($result)){ 
                    $this->changepasswordPage($result);   
                }
                else
                {
                   redirect('website/entermobile/');
                }
        }
    }
    public function changepasswordPage($result){
        $data['abc'] = $result;
        // print_r($data['abc']);die;
        $data['title']="Change Password";
        $this->load->view('website/include/header-top');
        $this->load->view('website/include/topbar');
        $this->load->view('website/include/header');
        $this->load->view('website/pages/changepassword',$data);
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');
    }

    public function changepassword(){
      $data = $this->input->post();
       $result = $this->Website_model->chanegpassword_model($data);
       if($result==true){
        $this->session->set_flashdata('success','Password Change Successfully');
        redirect('website/registerpage');
       }
       else{
          $this->session->set_flashdata('error','Something Error');
           redirect('website/registerpage');
       }

    }

     public function full_marks(){
        $data['title']="Full Marks";
        $this->load->view('website/include/header-top',$data);
        $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/fullmarks');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');

    }
  
    	
	public function validateuserlogin(){
		$data=$this->input->post();
		unset($data['login']);
		$result=$this->Website_model->login($data);
        
		if($result['verify']===true){
			$this->startsession($result);
			redirect('website/apply/');
		}
		else{ 
			$this->session->set_flashdata('logerr',$result['verify']);
			redirect('website/registerpage');
		}
	}
	
	public function startsession($result){
		$data['user']=md5($result['id']);
		$data['name']=$result['name'];
		$data['role']=$result['mobile'];
		$data['project']=PROJECT_NAME;
		$this->session->set_userdata($data);
	}


    public function aboutus(){
        $data['title']="About Us";
        
        $this->load->view('website/include/header-top',$data);
        $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/aboutus');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');

    }
    public function business_scholar(){
        $data['title']="Business Scholarship";
        
        $this->load->view('website/include/header-top',$data);
        $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/business_scholarship');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');
    }

    public function education_scholar(){
        $data['title']="Business Scholarship";
        
        $this->load->view('website/include/header-top',$data);
        $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/educational_scholarship');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');
    }
    public function termcondition(){
        $data['title']="Term & Condition";
        
        $this->load->view('website/include/header-top',$data);
        $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/term_condition');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');

    }
    public function contact(){
        $data['title']="About Us";
        
        $this->load->view('website/include/header-top',$data);
        $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/contact');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');

    }
    public function gallery(){
        $data['title']="About Us";
        
        $this->load->view('website/include/header-top',$data);
         $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/gallery');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');

    }
    public function apply(){
        $data['title']="About Us";
        $data['title']="Registration form";
        $this->load->view('website/include/header-top',$data);
        $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/applyform');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');

    }
    public function registerpage(){
        $data['title']="About Us";
        $data['title']="Registration form";
        $this->load->view('website/include/header-top',$data);
        $this->load->view('website/include/topbar',$data);
        $this->load->view('website/include/header');
        $this->load->view('website/pages/registerpage');
        $this->load->view('website/include/footer');
        $this->load->view('website/include/footer-links');

    }

    public function registerform(){
      $data =  $this->input->post();
      $aadhar = $data['aadhar'];
      $request = $this->Website_model->findstudent($aadhar); 
      if(!empty($request)){
        $msg = $this->session->set_flashdata('msg','You have already Registered !');
         redirect('website/apply/',$msg);
      }
      else{
        $this->load->helper('upload');
        $upload_path = './assets/uploadimage';
        $allowed_types = 'gif|jpg|jpeg|png';
        $result = upload_file("image", $upload_path, $allowed_types, time());
        $src=$result['path'];
        $data['image'] = $src;
        $result=$this->Website_model->registrationmodel($data);
          if(!empty($result)){
              $this->payment_start($result);
            }
            else{ 
              redirect('website/registerpage');
            }
      }
    }

    public function payment_start($id){
        $length = 20;
        $_SESSION['last_inst_id'] = $id;
        $row=$this->Website_model->fatchregisteredrecord($id);
        // echo PRE;
        // print_r($row);die;
         $content =define("API_KEY","rzp_live_JksRHvw2qszCVF");
        $someprice = $row['amount'];
        $paisaprice = $someprice*100;
        $orderno = $row['order_no'];
        $custname = $row['name'];
        $productinfo = 'Payment for Admission';
        $txnid = time();
        $contect = $row['contect'];
        // $surl = "payment-success.php";
        // $furl ="payment-success.php" ;
        $key_id = API_KEY;
        $currency_code = 'INR';
        $total = $paisaprice; 
        $amount = $someprice;
        $length = 18;
        $merchant_order_id=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
        $card_holder_name = $custname;
        // $email =  $row['email'];
        // $phone = $row['mobileno'];
        $name = "Customer of $custname - $orderno";
        $payrecord = array();
        $payrecord['orderno'] = $orderno;
        $payrecord['name'] = $custname;
        $payrecord['productinfo'] = $productinfo;
        $payrecord['currency_code'] = $currency_code;
        $payrecord['total'] = $total;
        $payrecord['amount'] = $amount;
        $payrecord['key_id'] = $key_id;
        $payrecord['card_holder_name'] = $card_holder_name;
        $payrecord['merchant_order_id'] = $merchant_order_id;
        $payrecord['merchant_trans_id'] = $txnid;
        $payrecord['phone'] = $contect;
        $data['allrecord'] =$payrecord;
        // echo PRE;
        // print_r($payrecord);die;
         $this->load->view('website/pages/payment',$data);
        // echo PRE;
        // print_r($result);die;
    }

    public function payment_success(){
         if(isset($_POST['razorpay_payment_id'])){
          $payment_details=json_encode($_POST);
          $razorpay_payment_id = $_POST['razorpay_payment_id'];
          // $payment_date = date('Y/m/d');
          $payment_status = 1;
          $id = $_SESSION['last_inst_id'];
          unset($_SESSION['last_inst_id']);
          $result = $this->Website_model->update_form($id,$payment_status,$payment_details,$razorpay_payment_id);
          if($result==true){
            $this->session->set_flashdata("msg","You have registered !!");
            $this->load->view('website/pages/payment_success');
          } 
       }
    }
     
    
    public function alldata($token=''){
		$this->load->library('alldata');
		$this->alldata->viewall($token);
	}
	
	public function gettable(){
		$this->load->library('alldata');
		$this->alldata->gettable();
	}
	
	public function updatedata(){
		$this->load->library('alldata');
		$this->alldata->updatedata();
	}
}