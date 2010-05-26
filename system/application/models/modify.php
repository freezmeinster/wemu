<?php
class Modify extends Model {

    function Modify()
    {
        parent::Model();
    }
    function delete_hdd($file){
     $base=$this->config->item('wemu_hdd');
     $conf=$this->config->item('wemu_conf');
     shell_exec("rm $base$file");
     shell_exec("rm $conf/hdd/$file");
    }
    function edit_hdd($name,$size,$type,$action){
              $conf = $this->config->item('wemu_conf_hdd');
	      $hdd =  $this->config->item('wemu_hdd');
	      if ($size == "0" && $type == "0" && $action == "fetch"){
			  $info['name'] = shell_exec ("cat $conf$name | grep NAME | cut -d= -f2");
			  $info['type'] = shell_exec ("cat $conf$name | grep TYPE | cut -d= -f2");
			  $info['size'] = shell_exec ("cat $conf$name | grep SIZE | cut -d= -f2");
			  $info['hdd'] = "$name";
			  return $info;
	      }
              if ($action == "fix"){
	            
		    $wemu_hdd = $this->config->item('wemu_hdd');
	            $wemu_conf_hdd = $this->config->item('wemu_conf_hdd');
	            $wemu_conf = $this->config->item('wemu_conf');
		   shell_exec("rm $wemu_hdd$name");
                   shell_exec("rm $wemu_conf_hdd$name");
                   shell_exec("touch $wemu_conf_hdd$name ");
	           shell_exec("qemu-img create -f $type $wemu_hdd$name $size");
		   shell_exec("touch $wemu_conf_hdd$name ");
	           shell_exec("echo NAME=\"$name\" >> $wemu_conf_hdd$name");
                   shell_exec("echo TYPE=\"$type\" >> $wemu_conf_hdd$name");
                   shell_exec("echo SIZE=\"$size\" >> $wemu_conf_hdd$name");
	      }
    }
}
?>
