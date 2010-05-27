<?php
class Proccess extends Model {

    function Proccess()
    {
        parent::Model();
    }
    function init_vm($vm){
        $conf=$this->config->item('wemu_conf_vm');	
	$mem= shell_exec("cat $conf$vm | grep \"MEMORY\" | cut -d= -f2 ");
	$hdd= shell_exec("cat $conf$vm | grep \"HARDDISK\" | cut -d= -f2 ");
	$iso= shell_exec("cat $conf$vm | grep \"ISO\" | cut -d= -f2 ");
	$port= shell_exec("cat $conf$vm | grep \"PORT\" | cut -d= -f2 ");
	$pid = shell_exec("qemu-system-x86_64 -hda $hdd -cdrom $iso -m $mem -vnc:$port -boot d &");
        return $pid;
    }
}
?>
