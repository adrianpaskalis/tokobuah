<?php

class Minggu4 extends CI_Controller
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
                            <td>{item}</td>                           <td>{result}</td>
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

        $test_name = 'tes if else';
        $this->unit->run($this->ifelse('tes','halo'),'tes',$test_name);

        $test_name = 'tes if else 2';
        $arr = array(0,1,2,3,4);
        $this->unit->run($this->ifelse2($arr),4,$test_name); 

        // $judul = "Pengujuan If Else2 Namachief NULL, namarm NULL Minggu 4";
        //  $expected =  "dia bukan teman saya";
        //  $this->unit->run($this->ifelse2(NULL,null),$expected,$judul);
         
        
        //  $judul = "Pengujuan If Else2 Namachief Andi, namarm NULL Minggu 4";
        //  $result =$this->ifelse2("andi", NULL);
        //  $expected =  "dia bukan teman saya";
        //  $this->unit->run($this->ifelse2("dia adalah teman saya",null),$expected,$judul);

        //  $judul = "Pengujuan If Else2 Namachief NULL, namarm ANDI Minggu 4";
        //  $result =$this->ifelse2(NULL, "andi");
        //  $expected = "dia bukan teman saya";
        //  $this->unit->run($this->ifelse2(null, "dia bukan teman saya"),$expected,$judul);


        // $judul = "Pengujuan If Else Namachief Adrian, namarm NULL Minggu 3";
        // $expected = "Adrian";
        // $this->unit->run($this->ifelse("Adrian",null),$expected,$judul); 
        
        // $judul = "Pengujuan If Else Namachief Adrian, namarm Paskalis Minggu 3";
        // $expected = "Adrian";
        // $this->unit->run($this->ifelse("Adrian","Paskalis"),$expected,$judul); 

        // $judul = "Pengujuan If Else Namachief NULL, namarm Paskalis Minggu 3";
        // $expected = "Paskalis";
        // $this->unit->run($this->ifelse(NULL,"Paskalis"),$expected,$judul);  

    //      $judul = "Pengujuan If Else3 Namachief NULL, namarm NULL, Namamhs Minggu 4";
    //      $result =$this->ifelse3(NULL, NULL, NULL);
    //     $expected =  "Something wrong. Please contact US";
    //     $this->unit->run($this->ifelse3(NULL,NULL,NULL),$expected,$judul); 

    //     $judul = "Pengujuan If Else3 Namachief NULL, namarm adr, Namamhs paskalis Minggu 4";
    //     $result =$this->ifelse3(NULL, "adrian", "paskalis");
    //    $expected = null ;
    //    $this->unit->run($this->ifelse3(NULL,"adrian","paskalis"),$expected,$judul); 

    //    $judul = "Pengujuan If Else3 Namachief adr, namarm null, Namamhs paskalis Minggu 4";
    //     $result =$this->ifelse3( "adrian",NULL, "paskalis");
    //    $expected = "adrian" ;
    //    $this->unit->run($this->ifelse3("adrian",NULL,"paskalis"),$expected,$judul);  

    //    $judul = "Pengujuan If Else3 Namachief adr, namarm paskalis, Namamhs null Minggu 4";
    //     $result =$this->ifelse3( "adrian", "paskalis", NULL);
    //    $expected = "paskalis" ;
    //    $this->unit->run($this->ifelse3("adrian","paskalis", NULL),$expected,$judul);  

    //    $judul = "Pengujuan If Else3 Namachief null, namarm adr, Namamhs pas Minggu 4";
    //    $result =$this->ifelse3( NULL,"adrian", "paskalis") ;
    //   $expected = "adrian" ;
    //   $this->unit->run($this->ifelse3(NULL,"adrian", "paskalis"),$expected,$judul);  

    //   $judul = "Pengujuan If Else3 Namachief paskalis, namarm adr, Namamhs null Minggu 4";
    //    $result =$this->ifelse3( "adrian", "paskalis", NULL) ;
    //   $expected = "adrian" ;
    //   $this->unit->run($this->ifelse3("adrian", "paskalis",NULL),$expected,$judul); 

    //   $judul = "Pengujuan If Else3 Namachief paskalis, namarm null, Namamhs adr Minggu 4";
    //    $result =$this->ifelse3( "paskalis", NULL, "adrian") ;
    //   $expected = "paskalis" ;
    //   $this->unit->run($this->ifelse3("paskalis", NULL, "adrian"),$expected,$judul);  

    //   $judul = "Pengujuan If Else3 Namachief null, namarm adr, Namamhs pas Minggu 4";
    //    $result =$this->ifelse3( NULL, "adrian", "paskalis") ;
    //   $expected = "adrian" ;
    //   $this->unit->run($this->ifelse3( NULL, "adrian", "paskalis"),$expected,$judul);  

    // $judul = "Pengujuan If Else4 1";
    // $result =$this->ifelse4() ;
    // $expected = "Have a nice Tuesday!" ;
    // $this->unit->run($result,$expected,$judul);  

    // $judul = "Pengujuan If Else4 2";
    // $result =$this->ifelse4() ;
    // $expected = "Have a nice Weekend!" ;
    // $this->unit->run($result,$expected,$judul);  

    // $judul = "Pengujuan If Else4 3";
    // $result =$this->ifelse4() ;
    // $expected = "Have a nice Monday!" ;
    // $this->unit->run($result,$expected,$judul);  

    // $judul = "Pengujuan If Else4 4";
    // $result =$this->ifelse4() ;
    // $expected = "Have a nice Wednesday!" ;
    // $this->unit->run($result,$expected,$judul);  


    // $judul = "Pengujuan If Else4 5";
    // $result =$this->ifelse4() ;
    // $expected = "Have a nice Thursday!" ;
    // $this->unit->run($result,$expected,$judul);  

    // $judul = "Pengujuan If Else4 6";
    // $result =$this->ifelse4() ;
    // $expected = "Have a nice Weekend!" ;
    // $this->unit->run($result,$expected,$judul);  

    // $judul = "Pengujian Loop2 1";
    // $arr = array(0,1,2,3,4);
    // $expected = "4"; 
    // $this->unit->run($this->loop2($arr),0, $judul);
    
    // $judul = "Pengujian Loop2 2";
    // $arr = array(null); 
    // $expected = ""; 
    // $this->unit->run($this->loop2($arr),0, $judul);
    
    // $judul = "Pengujian Loop2 3";
    // $arr = array(2,2,2,2);
    // $expected = "0"; 
    // $this->unit->run($this->loop2($arr),0, $judul);
    
    // $judul = "Pengujian Loop2 4";
    // $arr = array();
    // $expected = "0"; 
    // $this->unit->run($this->loop2($arr),0, $judul);
    
     $judul = "Pengujian Loop3 1"; 
     $expected = "Something wrong. Please contact us"; 
     $this->unit->run($this->loop3(null,null),$expected,$judul); 
    
     $judul = "Pengujian Loop3 2";
    $result = $this->loop3(1); 
    $expected = 100; 
     $this->unit->run($result,$expected,$judul); 
   
    // $judul = "Pengujian Loop3 1"; 
    // $expected = "Something wrong. Please contact us"; 
    // $this->unit->run($this->loop3(null,null),$expected,$judul); 
    
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

    //minggu 3
    public function ifelse($namachief = null,$namarm = null){
        $tmp = '';
        if($namachief != NULL){
            $tmp = $namachief;
        }
        else if ($namarm != NULL){
           $tmp = $namarm;
        }
        else{
            $tmp = "Something wrong. Please contact US";
        }
        return $tmp;
    }

    public function ifelse2($teman){
        $tmp = '';
        if($teman == "andi"){
           $tmp = "dia adalah teman saya";
        }else{
           $tmp = "dia bukan teman saya";
        }
        return $tmp;
    }

    public function ifelse3($namachief = null, $namarm = null, $namamhs){
        $tmp = '';
        if($namachief != NULL){
            $tmp = $namachief;
        }
        else if ($namarm != NULL){
            $tmp = $namarm;
        }
        else if ($namamhs != NULL){
            $tmp = $namamhs;
         }
        else{
            $tmp = "Something wrong. Please contact US";
        }
        return $tmp;
    }

    public function ifelse4($inputtgl = 'D'){
       $tmp = '';
       $d = date($inputtgl);
       if($d == "Fri"){
            $tmp = "Have a nice weekend!";
        }
        elseif($d == "Sun"){
        }
        elseif($d == "Wed"){
            $tmp = "Have a nice Wednesday!";
        }
        elseif($d == "Thu"){
            $tmp = "Have a nice Thursday!";
        }
        elseif($d == "Sat"){
            $tmp = "Have a nice Weekend!";
        }
        return $tmp;
    }

    public function loop1($var){
        for ($i=0; $i <= 10; $i++) { 
            $var+=$var;
        return $var;
    } 
}
   public function loop2($arr){
        $result = '';
        foreach ($arr as $key => $value) {
            if($key % 2 == 1){
                $value+=$value;
            }
            $result = $value;
        }
        return $result;
    }

    public function loop3($var){
        $a=0;
        while ($a <= 10) {
           $var += $var;
            $a++;
        }
        return $var;
    }
}