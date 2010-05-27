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
		$data['from'] = $this->uri->segment(3);
		$this->load->view("header");
                $this->load->view("lib/login",$data);
		$this->load->view("widebar");
		$this->load->view("footer");
	}
        function login()
        {
                $usr=$this->input->post('user');
                $pass=$this->input->post('pass');
                $from=$this->input->post('from');
		$des = "wemu/$from";
                $this->permision->set_user($usr,$pass);
                redirect($des);
                
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

	  function iso_register(){
		$path = $this->uri->segment(3);
		$iso = $this->uri->segment(4); 
 		$this->build->reg_iso($path,$iso);
		redirect('wemu/iso');
	    }
           function iso_unregister(){
		$iso = $this->uri->segment(3);
		$conf = $this->config->item('wemu_iso'); 
 		shell_exec("rm $conf/$iso");
		redirect('wemu/iso');
	    }

	    function del_hd(){
             $hdd = $this->uri->segment(3);
	     $this->modify->delete_hdd($hdd);
	     redirect('wemu/hardisk');
	    }
	    function vm_register(){
            $name=$this->input->post('name');
	    $mem=$this->input->post('mem');
	    $iso=$this->input->post('iso');
            $hdd=$this->input->post('hdd');
            $port=$this->input->post('port');
	    $this->build->reg_vm($name,$mem,$hdd,$iso,$port);
	    redirect('wemu/vm');
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
            function start_vm(){
               $vm=$this->uri->segment(3);
               $data['holla']=$this->proccess->init_vm($vm);
	       $this->load->view("header");
               $this->load->view("lib/vm_success",$data);
	       $this->load->view("widebar");
	       $this->load->view("footer");
               
            }
}
?>
