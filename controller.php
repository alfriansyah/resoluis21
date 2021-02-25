<?php 

  class home extends CI_controller{
    
    public function ceka(){
      return 'hello world';
    }
    
    // // default index 
    public function index(Type $var = null){}
    {
      return "halaman utama";
    }
  }
