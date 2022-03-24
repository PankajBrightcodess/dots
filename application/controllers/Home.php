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
	public function about_us(){
		$data['title'] = "About Entry";
		$data['datatable'] = true;
		$parent_sidebar = $this->Account_model->getsidebar(array('status'=>'1','parent'=>'0'),'all');	
		$data['parent_sidebar'] = $parent_sidebar;
		$this->template->load('pages','inst_about',$data);

	}
	public function ins_about(){
		$data =  $this->input->post();
	
		$result = $this->All_model -> insert_about($data);

		
		 if(!empty($result)){
		 	redirect('home/about_us');
		 } 
		 else{
		 	redirect('home/about_us');
		 }

	}

    public function notice(){
		$data['title'] = "Notice Entry";
		$data['datatable'] = true;
		$parent_sidebar = $this->Account_model->getsidebar(array('status'=>'1','parent'=>'0'),'all');	
		$data['parent_sidebar'] = $parent_sidebar;
		$this->template->load('pages','inst_notice',$data);

	}
	public function ins_notice(){
		$data =  $this->input->post();
		// print_r($data);die;
		$result = $this->All_model -> insert_notice($data);
		
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
}
