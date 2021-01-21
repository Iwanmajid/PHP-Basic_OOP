<?php 

//= konstanta bersifat global, tidak bisa disimpan di dalam class, harus di luar class =\\
define('NAMA', 'Iwan');
echo NAMA;

echo "<br>";

//= konstanta bisa disimpan didalam class =\\
const UMUR = 23;
echo UMUR;
echo "<br>";


class Coba1{
    const NAMA = 'Iwan';
}
echo Coba1::NAMA;
echo "<br>";


echo __LINE__; //menampilkan baris constant ini ditulis
echo "<br>";
echo __FILE__; //menampilkan alamat file yang bersangkutan
echo "<br>";
echo __DIR__; //menampilkan direktori dari file yang bersangkutan
echo "<br>";

function coba(){
    return __FUNCTION__; //menentukan sedang di function apa
}
echo coba();
echo "<br>";

class Coba{
    public $kelas = __CLASS__; //menentukan sedang di class apa
}
$obj = new Coba;
echo $obj->kelas;
echo "<br>";

?>