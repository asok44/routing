<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestRoute extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->library('form_validation');
    }

    public function index()
    {
        echo "this is index";
    }

    public function test()
    {
        echo "this is test";
    }

    public function home()
    {
        echo "this is home";
    }

    public function home2($var)
    {
        echo "this is home2"."  ".$var;
    }

    public function callback()
    {
        $this->load->view('callback');
    }

    public function validation()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|callback_usernameCheck');
        $this->form_validation->set_rules('phone', 'Phone No.', 'trim|required|callback_phoneCheck');
        if($this->form_validation->run() == true)
        {
            $this->load->view('success');
        }
        else
        {
            $this->load->view('callback');
        }
    }
    
    public function usernameCheck($str)
    {
        if($str == 'admin')
        {
            $this->form_validation->set_message('usernameCheck', 'The username field cannot be admin.');
            return false;
        }
        else
        {
            return true;
        }
    }
    
    public function phoneCheck()
    {
        $phn = $this->input->post('phone');
        $pattern = "/^[9][8][0-9]{8}$/";
        if (preg_match($pattern, $phn))
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('phoneCheck', 'The phone no. is invalid.');
            return false;
        }
    }
}
