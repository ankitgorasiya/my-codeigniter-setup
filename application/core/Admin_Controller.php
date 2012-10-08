<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Code here is run before admin controllers
class Admin_Controller extends MY_Controller
{

    var $data;
    var $user;
    public $pagination = array();

    public function __construct()
    {
        parent::__construct();

        //load theme
        $this->template->set_theme('foundation');
        $this->template->set_layout('template');

        //set regions
        $this->template->set_region('sidebar_nav', 'region/sidebar_nav', array(), TRUE, TRUE);
        $this->template->set_region('top_nav', 'region/top_nav', array(), TRUE, TRUE);
        $this->template->set_region('notices', 'region/notices', array(), TRUE, TRUE);

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


        //check user is logged in
//        if (!$this->isLoggedIn()) {
//            $this->session->set_flashdata('error', 'Access Denied.');
//            redirect('user/login');
//        } else {
//            $this->user = $this->session->userdata('user');
//        }
//
//        if (!$this->isModuleInstalled()) {
//            show_error('Module not found');
//        }
    }

    /**
     * Check weather user is logged in or not
     */
//    private function isLoggedIn()
//    {
//        if ($this->session->userdata('user')) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }

    /**
     * Check weather user is logged in or not
     */
//    private function isModuleInstalled()
//    {
//        if ($this->uri->segment('1')) {
//            $return = FALSE;
//            $this->load->model('module/module_m');
//            $module = $this->module_m->where('is_installed', '1')->get_by('name', $this->uri->segment('1'));
//            
//            if (!empty($module)) {
//                $return = TRUE;
//            }
//            return $return;
//        } else {
//            return TRUE;
//        }
//    }

}