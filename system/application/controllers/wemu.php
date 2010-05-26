<?php
class Wemu extends Controller {
	function index()
	{
                
                $info = $this->system_info->info();
		$this->load->view("header");
                $this->load->view("home");
		$this->load->view("sidebar", $info);
		$this->load->view("widebar");
		$this->load->view("footer");
	}
         function vm()
         {
	        $stat = $this->permision->check_user();
                if ($stat == "1") {
                $info = $this->system_info->info();
                $this->load->view("header");
                $this->load->view("vm.php", $info);
		$this->load->view("sidebar", $info);
		$this->load->view("widebar");
		$this->load->view("footer");
                }
                else if ($stat == "0") {
                   redirect('lib_wemu/check');
                } 
          
         }
        
         function hardisk()
         {     
                  $stat = $this->permision->check_user();
                if ($stat == "1") {
                $info = $this->system_info->info();
                $this->load->view("header");
                $this->load->view("hardisk.php", $info);
		$this->load->view("sidebar", $info);
		$this->load->view("widebar");
		$this->load->view("footer");
                }
                else if ($stat == "0") {
                   redirect('lib_wemu/check');
                }
		
         }
        function iso()
         {
                  $stat = $this->permision->check_user();
                if ($stat == "1") {
                $info = $this->system_info->info();
                $iso = $this->system_info->iso();
                $this->load->view("header");
                $this->load->view("iso.php", $iso);
		$this->load->view("sidebar", $info);
		$this->load->view("widebar");
		$this->load->view("footer");
                }
                else if ($stat == "0") {
                   redirect('lib_wemu/check');
                }
		
         }
        function about()
         {
                $info = $this->system_info->info();
                $this->load->view("header");
                $this->load->view("about.php");
		$this->load->view("sidebar", $info);
		$this->load->view("widebar");
		$this->load->view("footer");
         }
}
?>
