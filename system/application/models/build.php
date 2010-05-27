<?php
class Build extends Model {

    function Build()
    {
        parent::Model();
    }

    function disk($name,$size,$type){
	   $wemu_hdd = $this->config->item('wemu_hdd');
	   $wemu_conf_hdd = $this->config->item('wemu_conf_hdd');
	   $wemu_conf = $this->config->item('wemu_conf');
           shell_exec("qemu-img create -f $type $wemu_hdd$name.img $size");
           shell_exec("touch $wemu_conf_hdd$name.img ");
	   shell_exec("echo NAME=\"$name\" >> $wemu_conf_hdd$name.img ");
           shell_exec("echo TYPE=\"$type\" >> $wemu_conf_hdd$name.img ");
           shell_exec("echo SIZE=\"$size\" >> $wemu_conf_hdd$name.img ");
	   return $hola;
    }
    
   function reg_iso($path,$iso){
       $iso_path=$this->config->item('wemu_iso');
       shell_exec("touch $iso_path$iso");
       shell_exec("echo LOCATION=\"/home/www/oss/data/Distro/$path/$iso\" >> $iso_path_iso");
       return $nguk;
      }
}
?>
