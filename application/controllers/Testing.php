<?php

class Testing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        //$this->load->library('form_validation');
        $this->load->library('unit_test');
        // $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        //template
        $str = '
            <table border="0" cellpadding="4" cellspacing="1">
            {rows}
                    <tr>
                            <td>{item}</td>
                            <td>{result}</td>
                    </tr>
            {/rows}
            </table>';
        //$this->unit->set_template($str);
        $true = true;
        $expected = true;
        $test_name = 'uji coba assert';

        //test url
        //$output = $this->request('GET',['Login','test']);
        $expect = '{"foo":"bar"}';

        //$this->unit->run($output,$expect,$test_name);
        $this->unit->run($true,$expected,$test_name);
        echo $this->unit->report();
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
}
