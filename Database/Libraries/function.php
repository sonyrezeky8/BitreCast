<?php

Class Function {
    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function user_login() {
        $this->ci->load->model('namauser');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->namauser->get($user_id)->row();
        return $user_data;
    }
}