<?php 
class belajararray{
function getArray(){
        // array sederhana 
            $buah = ['Semangka','Pisang','jeruk','durian','salak','melon'];
            echo $buah[2]."\n"; // mengakses data array 
            $buah[1] = 'Pisang ambon';
            echo $buah[1];
            //pengulangan buah 
            foreach ($buah as $item) {
              
            echo "nama buah buah adalah $item"."\n";
            }
        }


// array assosiati{ve 
function assosiatif(){
    $identitas = ['nama' => 'Muhamad Ihsan', 'umur' => '20'];
        echo $identitas['nama']."\n"; // Ini seperti objek json
        $identitas['nama'] = 'ihsan Mustaqqq';
        echo $identitas['nama']."\n"; // Ini seperti objek json

//array multi dimensi
function duadimensi(){
    $siswa = [
        ["202333500591","Muhamad Ihsan Mustaqim"],
        ["202333500582","achaia sm"],
        ["202333500549","Dugong"]
    ];
    echo $siswa[0][0]."\n";
    
    $newarray =  ["ihsan eak eak","201238912"];
    $siswa[] = $newarray;
    foreach($siswa as $namanya){
        echo" Npm : $namanya[0]"."\n";
        echo" Nama : $namanya[1]"."\n";
         }
    return $siswa;
    }



}
function methodeArray(){
    $warna = ['Merah','kuning','hijau','biru','ungu'];
    $tambahwarna = array_push($warna,'jingga'); // push buat nambah
    foreach ($warna as $namawarna){
        print_r($namawarna);
    }
    //array_pop buat motong akhir
    //array_shift buat hapus satu  yg didepan

    

 }

}

$Object = new belajararray();
$Object->methodeArray();
?>