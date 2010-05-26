<?php
class System_info extends Model {

    function System_info()
    {
        parent::Model();
    }
    function info()
    {
         $os['total'] = shell_exec("free -m | grep Mem | awk '{print $2}'");
         $os['used'] = shell_exec("free -m | grep Mem | awk '{print $3}'");
         $os['free'] = shell_exec("free -m | grep Mem | awk '{print $4}'");
         $os['ostype'] = shell_exec("uname");
         $os['kernel'] = shell_exec("uname -r");
         $os['host'] = shell_exec("hostname");
         $os['qemu_version'] = shell_exec("qemu | grep \"QEMU PC\" | awk '{print $5}'");
         $os['ip'] = shell_exec("route -n | grep 0  | awk '{print $1}' | grep -v 0.0.0.0 | grep -v 127 | cut -d. -f1-3");
         $os['available_hdd'] = scandir($this->config->item('wemu_hdd'));
	 $df=$this->config->item('wemu_part');
	 $os['disk'] = shell_exec("df -h | grep $df | awk '{print $4}' | cut -d. -f1");
         $os['part_disk'] = shell_exec("ls -al  /dev/root | awk '{ print $11}'");
	 $os['wemu_base'] = $this->config->item('wemu_base');
	 $os['wemu_part'] = $this->config->item('wemu_part');
         return $os;
    }
	function hdd_info($hdd){
		 $hdd_conf = $this->config->item('wemu_conf_hdd');
		 $info['name'] = shell_exec("cat $hdd_conf$hdd | grep NAME | cut -d= -f2");
		 $info['type'] = shell_exec("cat $hdd_conf$hdd | grep TYPE | cut -d= -f2");
		 $info['size'] = shell_exec("cat $hdd_conf$hdd | grep SIZE | cut -d= -f2");
		 return $info;
	}
	function iso(){
        	 $os['available_iso'] = scandir($this->config->item('wemu_iso'));
		 return $os;
	}
    }
?>
