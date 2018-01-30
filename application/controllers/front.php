<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('company');
	}
    public function contact()
	{  
       
        if(!empty($_POST)) {
            $data['name']= $_POST['name'];
            $data['email']= $_POST['email'];
            $data['phone']= $_POST['phone'];
            $data['message']= $_POST['message'];
            $data['ip']= $data['date']= date('Y-m-d H:i:s');['ip'];
            $data['date']= date('Y-m-d H:i:s');
            $this->load->model('company_model');
            $result = $this->company_model->save_record($data);
                
            if(!empty($result)) {
               $this->session->set_flashdata('message', 'invalid username/password.');
            }
            
       }
        
		$this->load->view('contact');
	}
}
