<?php
class Proccess extends Model {

    function Proccess()
    {
        parent::Model();
    }
    function init_vm($vm){
        $conf=$this->config->item('wemu_conf_vm');
        $port = shell_exec("cat $conf$vm | grep \"PORT\" | awk -F= '{print $2}'");
        $com = shell_exec("cat $conf$vm | grep \"COM\" | awk -F= '{print $2}'");	
	$pid = exec("sudo /bin/qemu-system-x86_64 $com -vnc :$port");
        return $pid;
    }
}
?>
