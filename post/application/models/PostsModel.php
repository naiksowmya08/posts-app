<?php
class PostsModel extends CI_Model
{
    
    public function checkLoginSession()
    {
        $this->load->library("encryption");
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->db->select('*');
        $this->db->where(array('username'=>$username));
        $queryResults = $this->db->get('admin_users')->result();

        if(!empty($queryResults)){
            foreach ($queryResults as $queryResultsvalue) {
                if($this->encryption->decrypt($queryResultsvalue->password)== $password){
                    $status = 1;
                    $userdata = array(
                        'username' => $queryResultsvalue->username,
                        'user_id'  => $queryResultsvalue->id
                    );
                    $this->session->set_userdata('userdata',$userdata);
                    break;
                }else{
                     $status = 0;
                }
            }
        }else{
             $status = 0;
         }
        return $status;
    }


    public function getData($id= ""){
        if($id != ""){
            $this->db->where('post_id',$id);
        }
        $this->db->select('*');
        $postResult = $this->db->get('posts')->result();
        return $postResult;
    }

    public function insertData($imagefile = ""){
        $data = array(
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'author' => $_POST['author'],
            'image' => $imagefile
        );
        $this->db->insert('posts',$data);
        return 1;
    }

    public function updateData($imagefile = "",$id = ""){
        $data = array(
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'author' => $_POST['author'],
            'image' => $imagefile
        );
        $this->db->set($data);
        $this->db->where('post_id',$id);
        $this->db->update('posts');
        return 1;
    }
    
}
