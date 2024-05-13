<?php

class Home extends CI_Controller{

    public function index(){
        echo "ini adalah halaman utama";
    }

    public function galeri(){
        $this->tulis();//echo "halo";
        $this->tulis();
        echo $this->tambah(4,5);
    }

    public function tulis(){
        echo "Hallo";
    }

    public function tambah($a, $b){
        $hasil = $a+$b;
        return $hasil;
    }
}