<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['title']="Home";
		$this->template->load('pages','home',$data);
	}

	public function sidebar(){
		//checklogin();
		//validateurl_withrole('1');
		$data['title'] = "Sidebar Entry";
		$data['breadcrumb'] = array('admin/' => 'Dashboard');
		$data['datatable'] = true;
		$parent_sidebar = $this->Account_model->getsidebar(array('status'=>'1','parent'=>'0'),'all');	
		$data['parent_sidebar'] = $parent_sidebar;
		$this->template->load('pages/sidebar','add',$data);
	}
	public function banner(){
		$data['title'] = "Banner Entry";
		$data['breadcrumb'] = array('admin/' => 'Dashboard');
		$data['datatable'] = true;
		$banner = $this->All_model->list_banner();	
		$data['bannerlist'] = $banner;
		
		$this->template->load('pages','inst_banner',$data);

	}
	public function ins_banner(){
		$this->load->helper('upload');
		$upload_path = './assets/uploadimage/banner';
		$allowed_types = '.gif |jpg|jpeg|png';
		$result = upload_file("image", $upload_path, $allowed_types, time());
		// print_r($result);die;
		$src = $result['path'];
		$data['image'] = $src;
		$result = $this->All_model -> insert_banner($data);

		 if(!empty($result)){
		 	redirect('home/banner');
		 } 
		 else{
		 	redirect('home/banner');
		 }

	}
	public function upt_banner(){
		$data = $this->input->post();

		$this->load->helper('upload');
		$upload_path = './assets/uploadimage/banner';
		$allowed_types = '.gif|jpg|jpeg|png';
		$result = upload_file("image", $upload_path, $allowed_types, time());
	   
		$src = $result['path'];
		$data['image'] = $src;
		
		$result = $this->All_model->update_banner($data);
		
	

		 if(!empty($result)){
		 	redirect('home/banner');
		 }
		 else{
		 	redirect('home/banner');
		 }
			}
	public function about_us(){
		$data['title'] = "About Entry";
		$data['datatable'] = true;
		$about= $this->All_model->list_about();
		$data['aboutlist'] = $about;
		$this->template->load('pages','inst_about',$data);

	}
	public function ins_about(){
		$data =  $this->input->post();
		echo PRE;
		// print_r($data);die;
		$result = $this->All_model -> insert_about($data);
             // print_r($result);die;
		 if(!empty($result)){
		 	redirect('home/about_us');
		 } 
		 else{
		 	redirect('home/about_us');
		 }
	}
	public function upt_about(){
		echo '<pre>';
		$data = $this->input->post();
		$result = $this->All_model->update_about($data);
		// print_r($result);die;

		 if(!empty($result)){
		 	redirect('home/about_us');
		 }
		 else{
		 	redirect('home/about_us');
		 }
			}
     
     public function delete_about(){
		//checklogin();
		//validateurl_withrole('1');
		$data = $this->input->get('ids');
	
		$status = $this->All_model->delete_abouts($data);
	
		if($status){
			$this->session->set_flashdata("msg","Deleted Successfully !!");
			redirect('home/about_us/');
		}else{
			$this->session->set_flashdata("err_msg","Try Again !!");
			redirect('home/about_us/');
		}
	}



    public function notice(){
		$data['title'] = "Notice Entry";
		$data['datatable'] = true;
		$notice = $this->All_model->list_notice();	
		$data['noticelist'] = $notice;
		$this->template->load('pages','inst_notice',$data);

	}
	public function ins_notice(){
		$data =  $this->input->post();
		// echo PRE;
		// print_r($_FILES);die;
		$this->load->helper('upload');
		$upload_path = './assets/uploadimage/noticefile';
		$allowed_types = '.doc|jpg|jpeg|docx|pdf';
		$result = upload_file("image", $upload_path, $allowed_types, time());
		$src = $result['path'];
		$data['image'] = $src;
		$result = $this->All_model->insert_notice($data);
		
		
		
		 if(!empty($result)){
		 	redirect('home/notice');
		 } 
		 else{
		 	redirect('home/notice');
		 }

	}
	public function upt_notice(){
		$data = $this->input->post();
		$this->load->helper('upload');
		$upload_path = './assets/uploadimage/noticefile';
		$allowed_types = '.doc|jpg|jpeg|docx|pdf';
		$result = upload_file("image", $upload_path, $allowed_types, time());
		$src = $result['path'];
		$data['image'] = $src;
		$result = $this->All_model->update_notice($data);
		
		if(!empty($result)){
			redirect('home/notice');
		}
		else{
			redirect('home/notice');
		}
	}
	public function gallery(){
		$data['title'] = "Gallery Entry";
		$data['breadcrumb'] = array('admin/' => 'Dashboard');
		$data['datatable'] = true;
		$gallery = $this->All_model->list_gallery();	
		$data['gallerylist'] = $gallery;
		// print_r($data['gallerylist']);die;
		$this->template->load('pages','inst_gallery',$data);

	}
	public function savegallery(){
		// echo PRE;
		// print_r($_FILES);die;
		$this->load->helper('upload');
        $upload_path = './assets/uploadimage/gallery';
        $allowed_types = 'gif|jpg|jpeg|png';
        $result = upload_file("image", $upload_path, $allowed_types, time());
        $src=$result['path'];
        $data['image'] = $src;
        // print_r($data);die;
        $result=$this->All_model->insert_gallery($data);
          if(!empty($result)){
              redirect('home/gallery');
            }
            else{ 
               redirect('home/gallery');
            }

	}
public function upt_gallery(){
	   echo PRE;
		$data = $this->input->post();
		
		$this->load->helper('upload');
		$upload_path = './assets/uploadimage/gallery';
		$allowed_types = '.gif|jpg|jpeg|png';
		$result = upload_file("image", $upload_path, $allowed_types, time());
		$src = $result['path'];
		$data['image'] = $src;
		
		$result = $this->All_model->update_gallery($data);
	
		// print_r($data);die;
	

		 if(!empty($result)){
		 	redirect('home/gallery');
		 }
		 else{
		 	redirect('home/gallery');
		 }
			}



		 public function delete_gallery(){
		//checklogin();
		//validateurl_withrole('1');
		$data = $this->input->get('ids');

		$status = $this->All_model->delete_gallerys($data);


		if($status){
			$this->session->set_flashdata("msg","Deleted Successfully !!");
			redirect('home/gallery/');
		}else{
			$this->session->set_flashdata("err_msg","Try Again !!");
			redirect('home/gallery/');
		}
	}	


	 public function delete_banner(){
		//checklogin();
		//validateurl_withrole('1');
		$data = $this->input->get('ids');

		$status = $this->All_model->delete_banners($data);
		

		if($status){
			$this->session->set_flashdata("msg","Deleted Successfully !!");
			redirect('home/banner/');
		}else{
			$this->session->set_flashdata("err_msg","Try Again !!");
			redirect('home/banner/');
		}
	}	

 public function delete_notice(){
		//checklogin();
		//validateurl_withrole('1');
		$data = $this->input->get('ids');

		$status = $this->All_model->delete_notices($data);
		

		if($status){
			$this->session->set_flashdata("msg","Deleted Successfully !!");
			redirect('home/notice/');
		}else{
			$this->session->set_flashdata("err_msg","Try Again !!");
			redirect('home/notice/');
		}
	}	

	public function savesidebar(){
		//checklogin();
		$postdata = $this->input->post();		
		$status = $this->Account_model->savesidebar($postdata);
		if($status){
			$this->session->set_flashdata("msg","Added Successfully !!");
			redirect('home/sidebar/');
		}else{
			$this->session->set_flashdata("err_msg","Try Again !!");
			redirect('home/sidebar/');
		}
	}

	public function edit_sidebar($edit_id){
		//checklogin();
		//validateurl_withrole('1');
		$data['title'] = "Edit Sidebar Entry";
		$data['breadcrumb'] = array('admin/' => 'Dashboard');
		$data['datatable'] = true;
		$parent_sidebar = $this->Account_model->getsidebar(array('status'=>'1','parent'=>'0'),'all');	
		$data['parent_sidebar'] = $parent_sidebar;
		$one_sidebar = $this->Account_model->getsidebar(array('status'=>'1','id'=>$edit_id),'single');	
		$data['one_sidebar'] = $one_sidebar;
		$this->template->load('pages/sidebar','edit',$data);
	}

	public function updatesidebar(){
		//checklogin();
		//validateurl_withrole('1');
		$postdata = $this->input->post();		
		$status = $this->Account_model->update_sidebar($postdata);
		if($status){
			$this->session->set_flashdata("msg","Updated Successfully !!");
			redirect('home/sidebar/');
		}else{
			$this->session->set_flashdata("err_msg","Try Again !!");
			redirect('home/sidebar/');
		}
	}

	public function delete_sidebar($delete_id){
		//checklogin();
		//validateurl_withrole('1');
		$status = $this->Account_model->deletesidebar($delete_id);
		if($status){
			$this->session->set_flashdata("msg","Deleted Successfully !!");
			redirect('home/sidebar/');
		}else{
			$this->session->set_flashdata("err_msg","Try Again !!");
			redirect('home/sidebar/');
		}
	}

	public function ajax_sidebar(){
		$dupid = $this->input->post('dupid');
		$sidebardata = $this->Account_model->getsidebar(array('status'=>'1','id'=>$dupid),'single');
		if(!empty($sidebardata)){
			if(!empty($sidebardata['role_id'])){
				$sidebardata['role_id'] = str_replace(',','|',str_replace("\"",'',$sidebardata['role_id']));
			}
			echo json_encode($sidebardata);
		}else{
			echo false;
		}
	}
    
	public function getOrderList(){
		$parent_id=$this->input->post('parent_id');
		$array=$this->Account_model->getOrderList($parent_id);
		echo json_encode($array);
	}
	public function form(){
		$data['title']="Form";
		$this->template->load("pages","form",$data);
	}
	
	public function upload(){
		$this->load->helper('upload');
		$result=upload_file("image","./assets/uploads/","jpg|png|jpeg","image");
		$src=$result['path'];
		$this->load->helper('tinify');
		tinifyresizeimage(".".$src,400,400,"cover");
		print_r($src);
	}

	public function registrationlist(){
		
		$data['title'] = "Registration List";
		$data['datatable'] = true;
		$data['registerlist'] = $this->Account_model->getregistrationlist();
		// echo PRE;
		// print_r($data);die;
		$this->template->load('pages','registration',$data);
		
	}


	   public function create_pdf(){
                $id =$this->uri->segment(3); 
                $getdetails = array();
                $getdetails = $this->Account_model->get_singlerecord($id);
                // echo PRE;
                // print_r( $getdetails);die;
                $pdf = $this->customfpdf->getInstance();
                $pdf->AliasNbPages();
                $pdf->AddPage();
                $pdf->Header('Arial');
                $pdf->SetFont('Times','',25);

               $pdf->Cell(0,10,'Doer Or Thinker.',0,0,'C');
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(0,0,'',0,1,'C');
                $pdf->SetFont('Arial','B',15);
                $pdf->Cell(0,30,'Admin Card',0,1,'C');
                $pdf->Cell(0,0,'',1,1,'C');
                $pdf->Cell(0,3,'',0,1,'C');
                $pdf->SetFont('Arial','B',9);
                // $pdf->Cell(20,5,'Sl. No.',0,0,'C');
                $pdf->Cell(20,5,'Name :  ',0,0,'C');
                $pdf->Cell(35,5,$getdetails[0]['name'],0,1,'C');
                $pdf->Cell(30,5,' ',0,1,'C');
                $pdf->Cell(25,5,'Exam Date:',0,0,'C');
                $pdf->Cell(25,5,date('d-m-Y'),0,1,'C');
                $pdf->Cell(30,5,' ',0,1,'C');
                $pdf->Cell(30,5,'Exam Center :',0,0,'C');
                $pdf->Cell(35,5,'Ranchi Collage ranchi',0,1,'C');
                 $pdf->Cell(30,5,' ',0,1,'C');
                $pdf->Cell(30,5,'Exam Time :',0,0,'C');
                $pdf->Cell(25,5,'09:11 AM',0,1,'C');
                // $pdf->SetFont('Arial','',8);
                
    
                
                $file =  date('Ymdhis').'_details.pdf';
                $pdf->Output($file,'I');
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
	function Fileupload($dir,$inputname,$allext,$pass_size,$newname){
            //print_r($_FILES);
            if (file_exists($_FILES["$inputname"]["tmp_name"])) {
                //do this contain any file check
                $file_extension = strtolower( pathinfo($_FILES["$inputname"]["name"], PATHINFO_EXTENSION));
                $error = "";
               if( in_array($file_extension, $allext)){
                   //file extension check
                $size = $_FILES["$inputname"]["size"];
                
                if ($size <= "$pass_size") {
                        //dimension check
                        $tmp=$_FILES["$inputname"]["tmp_name"];
                        
                        $extension = end(explode(".", $_FILES["$inputname"]["name"]));                      
                        $name=$newname.".".$extension;
                        //$extension[1] ="jpg";               
                        if(move_uploaded_file($tmp, "$dir"."$name")){
                            return true;
                            //echo "$dir $newname.$extension[1]";
                        }
                    } 
                    else{
                        $error .= "Please upload file size must be less than 30MB";
                        //echo $error;
                    }
               } else{
                $error .="Please Upload a PDF";
                //echo $error;
               }
            } else{
                //print_r($_FILES);
                $error .="Please Select an Document";
                // $error;
            }
            return $error;
        }

}
