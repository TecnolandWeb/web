<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class MY_Controller extends CI_Controller {
    
    protected $data = array();
    
    function __construct(){
        parent::__construct();
        $this->data['title'] = 'Tecnoland Alcañiz';
        $this->data['keywords'] = "Tecnoland Alcañiz Lan Party Aragón Battlefield Games Videogames";
        $this->data['before_head'] = '';
        $this->data['before_body'] = '';
    }
    
    protected function render($the_view = NULL, $template = 'normal_template'){
        if ($template == 'json' || $this->input->is_ajax_request()){
            header('Content-Type: application/json'); 
            echo json_encode($this->data); 
        }else{
            $this->data['the_view_content'] = (is_null($the_view)) ? '': $this->load->view($the_view,$this->data, TRUE);
            $this->load->view('templates/'.$template, $this->data); 
        }
    }
}
 
class Admin_Controller extends MY_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()){
            //redirigir al usuario a la pagina de logeo
            redirect('admin/user/login','refresh');
        }
        $this->data['title'] = 'Tecnoland Alcañiz - Admin';
    }
    
    protected function render($the_view = NULL, $template = 'admin_template'){
        parent::render($the_view,$template);
    }
}
 
class Public_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }
}