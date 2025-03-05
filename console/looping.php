<?php 
//looping  
class looping{
    // ini sederhana
    function forLoop(){
        $angka = 10;
        for ($i = 0;$i <= $angka;$i ++){
            echo "angka ke $i \n";
        }
    }
    // INi sama aja tapi bisa inputan karena ada argument
    function forLoopArgumen($angka){
     for ($i = 1; $i<= $angka; $i++){
            echo "ini angka ke : $i \n";
     }
    }
    function whileloop(){
        $halo = 1;
        while($halo <= 20){
            echo " halo $halo";
            $halo ++;
        }
    }

    function whileloopArgumen($angka){
        while ($angka <= 90){
            echo "angka ke $angka \n";
            $angka++;
        }
    }

    
}
$Loop = new looping();
$Loop->forLoopArgumen(2);
$Loop->whileloopArgumen(30);
?>