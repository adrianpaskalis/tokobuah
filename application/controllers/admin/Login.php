<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
        // $this->output->enable_profiler(TRUE);
        $this->load->library('unit_test');
    }

    public function index()
    {
        if ($this->input->post()) {
            if ($this->user_model->doLogin()) redirect(site_url('admin'));
        }
        $this->load->view("admin/login_page.php");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }

    public function test()
    {
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('foo' => 'bar')));
    }

    public function testing(){
        
        //test url
        $test_name = 'assert test';
        $output = $this->test();
        $expect = json_encode(array('foo' => 'bar'));
        print_r($output);exit();

        //$this->unit->run($this->test(),$expected,$test_name);
        $this->unit->run($output,$expect,$test_name);
        echo $this->unit->report();
    }
}
