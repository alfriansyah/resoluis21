<?php 

  class home extends CI_controller{
    
    public function ceka(){
      return 'hello world';
    }
    
    // // default index 
    public function index(Type $var = null)
    {
      return "halaman utama";
    }
    
    //  default tambha data 
    public function tambah(Type $var = null)
    {
      return "tambah data diri";
    }

    //  hapus 
    public function hapus(Type $var = null)
    {
      return "penghapusna data berhasil";
    }
  
  }