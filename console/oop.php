<?php 

class hewan{
    protected $nama;
    function __construct($nama){
        $this->nama = $nama;
    }
    function getnama(){
        return $this->nama;
    }
    

}
class kucing extends hewan {
    function getnama(){
        echo "nama kucingnya : ".parent::getnama();

    }
}
$kucing = new kucing("belang");
$kucing->getnama(); // inheritance 



?>