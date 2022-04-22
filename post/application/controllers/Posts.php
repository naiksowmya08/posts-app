<?php
class Posts extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('PostsModel');
	}
    
    public function index()
    {
            $postData['psdata'] = $this->PostsModel->getData();
            $this->load->view('posts-page',$postData);


    }
    public function page($id="")
    {

            $postData['psdata'] = $this->PostsModel->getData($id);
            $this->load->view('post-details-page',$postData);   
       
    }

}
