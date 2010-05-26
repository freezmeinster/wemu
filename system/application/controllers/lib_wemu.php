<?php
class Lib_wemu extends Controller {

	function index()
	{
                $stat = $this->permision->check_user();
                if ($stat == "1") {
                   redirect('wemu');
                }
                else if ($stat == "0") {
                   redirect('lib_wemu/check');
                }
	}
        function check()
	{
		$this->load->view("header");
                $this->load->view("lib/login");
		$this->load->view("widebar");
		$this->load->view("footer");
	}
        function login()
        {
                $usr=$this->input->post('user');
                $pass=$this->input->post('pass');
                $this->permision->set_user($usr,$pass);
                redirect('wemu');
                
        }
        function logout()
        {
                $this->permision->destroy_user();
                 redirect('wemu');
        }
         
        function create_hd()
        {    
                $stat = $this->permision->check_user();
                if ($stat == "1") {
                $name=$this->input->post('hd_name');  
		$size=$this->input->post('size');
		$type=$this->input->post('type');
		$this->build->disk($name,$size,$type);
                redirect('wemu/hardisk'); 
                }
                else if ($stat == "0") {
                   redirect('lib_wemu/check');
                }
        }
        function upload_iso(){
	  
	    }
	    function del_hd(){
         $hdd = $this->uri->segment(3);
	     $this->modify->delete_hdd($hdd);
	     redirect('wemu/hardisk');
	    }

	    function edit_hd(){
		$hdd = $this->uri->segment(3);
		$info = $this->modify->edit_hdd($hdd,'0','0','fetch');
		$this->load->view("header");
                $this->load->view("lib/edit_hd", $info);
		$this->load->view("widebar");
		$this->load->view("footer");
		}
            function fix_hd(){
                $name = $this->input->post('hd_name');
		$type = $this->input->post('type');
		$size = $this->input->post('size');
		$hdd = $this->input->post('path');
		$this->modify->edit_hdd($hdd,$size,$type,'fix');
		redirect('wemu/hardisk');
	    }
}
?>
