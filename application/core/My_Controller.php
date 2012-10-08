<?php

defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'/core/Admin_Controller.php';
include_once APPPATH.'/core/Public_Controller.php';
/**
 * 
 * core classes
 * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 * @property CI_Table $table
 * @property CI_Session $session
 * @property CI_FTP $ftp
 * 
 * 
 * Models
 * @property cache_m $cache_m
 * @property menu_m $menu_m
 * @property menu_link_m $menu_link_m
 * @property menu_link_role $menu_link_role_m
 * @property role_m $role_m
 * @property user_m $user_m
 * @property variable_m $variable_m
 * 
 * 
 * Library
 * 
 * 
 */

// Code here is run before ALL controllers
class MY_Controller extends CI_Controller
{

    // Deprecated: No longer used globally
    public function MY_Controller()
    {
        parent::__construct();
    }

    protected function is_ajax()
    {
        return $this->input->server('HTTP_X_REQUESTED_WITH') == 'XMLHttpRequest';
    }

}