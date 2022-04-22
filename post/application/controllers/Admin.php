<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
	}
    
    public function index()
    {
    		if(isset($_SESSION['userdata'])){
    			redirect('admin/dashboard');
    		}else{
    			$this->load->view('admin-login');
    		}
            

    }

    public function login()
    {

    		if($this->input->server('REQUEST_METHOD') == "POST"){

    			$status = $this->LoginModel->checkLoginSession('');

    			if($status == 1){
    				redirect('admin/dashboard');
    			}else{
    				$this->session->set_flashdata('error','Wrong Login Credentials');
    				redirect('admin');
    			}
    		}

    }

    public function dashboard(){

    	if(isset($_SESSION['userdata'])){
    		$postData['viewData'] = $this->LoginModel->getPostData('');
    		$this->load->view('admin-dashboard',$postData);
    	}else{
    		redirect('admin');
    	}
    }

    public function editPost($id = ""){
    	if(isset($_SESSION['userdata'])){
    		if(!empty($id)){
    			$postData['editData'] = $this->LoginModel->getPostData($id);
    			$postData['pageTitle'] = 'Edit';
    		}else{

    			$postData['editData'] = array((object)array(
    				'title' => "",
    				'description' => "",
    				'image' => "",
    				'author' => "",
    				'post_id' => ""
    			));
    			$postData['pageTitle'] = 'Add';
    		}
    		$this->load->view('admin-post',$postData);
    	}else{
    		redirect('admin');
    	}
    }

    public function update($id=""){
    	   $file_element_name = 'image';  
		   if ($_FILES['image']['name']!= "")
		   {
		      $config['upload_path'] = './resource/';
		      $config['allowed_types'] = 'gif|jpg|png';
		      $config['remove_spaces']=TRUE;  
		      $config['encrypt_name']=TRUE;  
		      $this->load->library('upload', $config);

		      if(!$this->upload->do_upload($file_element_name))
		      {
		         $error = array('error' => $this->upload->display_errors());
		         $this->session->set_flashdata('msg',$error['error']);
		         redirect('admin/dashboard');
		      }
		      else
		      {
		         $data = $this->upload->data();
		         $imagefile = $data['file_name']; 
		      }
		   }elseif($_FILES['image']['name']== "" && $_POST['hiddenValue'] != ""){
		   	$imagefile = $_POST['hiddenValue']; 
		   }
		   if($id == ""){
		   	$this->LoginModel->insertData($imagefile);
		   }else{
		   	$this->LoginModel->updateData($imagefile,$id);
		   }
		   
		   $this->session->set_flashdata('msg','Data Updated');
		   redirect('admin/dashboard');

    }

    public function deletePost($id = ""){
    	$this->LoginModel->deleteData($id);
    	$this->session->set_flashdata('msg','Post Deleted');
    	redirect('admin/dashboard');
    }

    public function logout(){
    	session_destroy();
    	redirect('admin');
    }
    
}
