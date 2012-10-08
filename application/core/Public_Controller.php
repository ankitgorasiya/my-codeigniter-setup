<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Code here is run before frontend controllers
class Public_Controller extends MY_Controller
{

    var $data;
    public $pagination = array();

    public function __construct() {
        parent::__construct();

        //load theme
        $this->template->set_theme('bootstrap');
        $this->template->set_layout('login');

        $this->template->set_region('notices', 'region/notices', array(), TRUE, TRUE);
        
        //set regions
        
        //load default peginatin data
        $this->pagination['div'] = 'data-grid';
        $this->pagination['postVar'] = 'page';
        $this->pagination['num_links'] = 2;
        $this->pagination['first_link'] = '&lsaquo; First';
        $this->pagination['next_link'] = 'Next &rarr;';
        $this->pagination['prev_link'] = '&larr; Previous';
        $this->pagination['last_link'] = 'Last &rsaquo;';
        $this->pagination['full_tag_open'] = '<ul>';
        $this->pagination['full_tag_close'] = '</ul>';
        $this->pagination['first_tag_open'] = '<li class="prev">';
        $this->pagination['first_tag_close'] = '</li>';
        $this->pagination['last_tag_open'] = '<li class="next">';
        $this->pagination['last_tag_close'] = '</li>';
        $this->pagination['cur_tag_open'] = '<li class="active"><a href="#">';
        $this->pagination['cur_tag_close'] = '</li></a>';
        $this->pagination['next_tag_open'] = '<li class="next">';
        $this->pagination['next_tag_close'] = '</li>';
        $this->pagination['prev_tag_open'] = '<li class="prev">';
        $this->pagination['prev_tag_close'] = '</li>';
        $this->pagination['num_tag_open'] = '<li>';
        $this->pagination['num_tag_close'] = '</li>';
        $this->pagination['per_page'] = 10;
    }

}
