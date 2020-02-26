<?php 

class Minggu3 extends CI_Controller  
{ 
    public function __construct() 
    {
        parent::__construct(); 
        $this->load->library('unit_test');
    }

    public function index() 
    {
        //PENGUJUANIFELSE 
        $judul = 'Pengujuan If Else Namachief NULL, namarm NULL Minggu 3';
        $expected = 'Something wrong. Please Contact US'; 
        $this->unit->run($this->ifelse(null,null),$expected,$judul);


        $judul = "Pengujuan If Else Namachief Adrian, namarm NULL Minggu 3";
        $expected = "Adrian";
        $this->unit->run($this->ifelse("Adrian",null),$expected,$judul); 
        
        $judul = "Pengujuan If Else Namachief Adrian, namarm Paskalis Minggu 3";
        $expected = "Adrian";
        $this->unit->run($this->ifelse("Adrian","Paskalis"),$expected,$judul); 

        $judul = "Pengujuan If Else Namachief NULL, namarm Paskalis Minggu 3";
        $expected = "Paskalis";
        $this->unit->run($this->ifelse(NULL,"Paskalis"),$expected,$judul); 

        echo $this->unit->report(); 
    }

    public function ifelse($namachief= NULL, $namarm= NULL){
        $temp= " "; 
        if($namachief != NULL){
            $temp = $namachief;
        } 

        else if ($namarm != NULL){
            $temp = $namarm;
        }
        else{
            $temp ="Something wrong. Please Contact US"; 
        }
        return $temp;
    }
}

