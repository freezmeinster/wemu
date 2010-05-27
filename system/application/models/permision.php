<?php
class Permision extends Model {

    function Permission()
    {
        parent::Model();
    }

    function set_user($usr,$pass){
    $newdata = array(
                   'username'  => $usr,
                   'password'  => $pass,
                    );

    $this->session->set_userdata($newdata);
    }

    function check_user(){
    $user = $this->session->userdata('username');
    $pass = $this->session->userdata('password');
        if ($user == "admin" && $pass == "210789" ) {
                return 1;
        } else return 0;
    }    
    
    function destroy_user(){
     $this->session->sess_destroy();
    }

}
?>
