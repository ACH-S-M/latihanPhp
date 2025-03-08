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
    function FizzBuzz($angka) {
    for ($i = 1; $i <= $angka; $i++) { // Mulai dari 1
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz\n";
        } elseif ($i % 3 == 0) {
            echo "Fizz\n";
        } elseif ($i % 5 == 0) {
            echo "Buzz\n";
        } else {
            echo "Angka ke-$i\n";
        }
    }
}
    function segitigabintang($angka){
        $bintang = "*";
        for ($i = 1;$i<= $angka;$i++){ // kalo ada argumen masuk i akan sama dengan argumen dan perulangan sama kaya argumen
            echo" \n";
            for ($j = 1;$j <= $i;$j++){ // j akan ngikutin i , tapi yg dieksekusi j dulu
                echo $bintang;
           
            }
        }
    }
    function fibonachi($angka){
        $a = 0; $b = 1;
        for($i = 0; $i<$angka;$i++){
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
            echo $a."  " ;
        }
    }
   
}


function recursiveNya($value){
    if ($value <= 1){
        return 1;
    }else {
        return $value * recursiveNya($value - 1);
    }
}

$Loop = new looping();
$Loop->fibonachi(10);
?>