<?php 
    class parameter{
        function dinamisParam(){
            $total = 0;
            $args = func_get_args(); // ini buat dinamis
            foreach ($args as $arg){
                $total += $arg;        
            }
            return $total;
        }
        //return with validasi 
        function belibarang($jumlah,$uang){
            $harga = 50000;
            if ($jumlah != 0){
                $totalbelanjaan = $jumlah * $harga;
                if ($uang >= $totalbelanjaan){
                    $sisauang = $uang - $totalbelanjaan;
                    echo " berhasil membeli barang sisa uang : $sisauang";
                    return $sisauang;
                }else {
                    echo "Uang mu ga cukup  total belanjaanmu itu $totalbelanjaan sedangkan uangmu $uang";
                }
            }else {
                echo "Gaboleh 0 ";
            }

        }

    }
$param = new parameter();
$hasil = $param->dinamisParam(2,3,6,10,90);
$beli = $param->belibarang(20,90000);


?>
