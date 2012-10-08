<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog extends Admin_Controller
{
    public function index()
    {
         //set content
        $this->template->set_content('blog/addpost', $data);

        $this->template->render(); 
    }

    public function addPost()
    {
       //set content
        $this->template->set_content('blog/addpost', $this->data);

        $this->template->render(); 
       
    }

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */