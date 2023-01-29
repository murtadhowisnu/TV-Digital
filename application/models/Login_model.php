<?php
class Login_model extends CI_Model{
    //login dengan isr
    function auth_isr($email){
       $user = $this->db->get_where('user_isr', ['email' => $email]);
       return $user;

    }
 
    //login dengan hankam
    function auth_hankam($email){
        $user = $this->db->get_where('user', ['email' => $email]);
        return $user;
 
    }
 
}