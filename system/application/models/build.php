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
    
function isodir( $path = '.', $level = 0 ){

    $ignore = array( 'cgi-bin', '.', '..' );

    $dh = @opendir( $path );
    
    while( false !== ( $file = readdir( $dh ) ) ){
    
        if( !in_array( $file, $ignore ) ){
            
            $spaces = str_repeat( '&nbsp;', ( $level * 4 ) );
            
            if( is_dir( "$path/$file" ) ){
            
                echo "<strong>$spaces $file</strong><br />";
                getDirectory( "$path/$file", ($level+1) );
            
            } else {
            
                echo "$spaces $file<br />";
            
            }
        
        }
    
    }
    
    closedir( $dh );

}
}
?>
