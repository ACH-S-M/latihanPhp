<?php 

class hewan{
    private $nama;
    private $bulu;
    private $karnivora;
    private $mamalia;
    private $hidup;
    function __construct($nama,$bulu,$karnivore,$mamalia,$hidup){
        $this->nama = $nama;
        $this->bulu = $bulu;
        $this->karnivora = $karnivore;
        $this->mamalia = $mamalia;
        $this->hidup = $hidup;

    }
    function namahewan(){
     echo $this->nama."\n";
    }
    function buluhewan(){
        echo $this->bulu;
    }
    

}
$halo = new hewan("kucing","hitam abu abu",true,true,"di darat");
$halo->namahewan();
$halo->buluhewan();

?>