<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
    
    class main extends CI_Controller {
        function __construct(){
        parent::__construct();
        $this->site = $this->session->userdata('site');
        $this->project_key = $this->config->item('project_key');   
        $this->appliactionname_thai = $this->config->item('appliactionname_thai');   
    }
        
        public function Index(){
            
            $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
            $this->lang->load($lang,$lang);
               if($this->session->userdata('f_acc_id'))
                       {

                         $data['copyright']  = 'Team IT' ;                                
                         $data['copyright_date']   = date('Y');                                
                         $data['copyright_author']  =  'Mr. Thanit Netprokaew' ;                                 
                         $data['projectname']  =  $this->appliactionname_thai ;                                 
                         $this->load->view('main',$data);                         
                       }else{
                         //If no session, redirect to login page
                         redirect('login', 'refresh');
                       }            
        }
    }
?>   