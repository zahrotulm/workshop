<?php

class Buah {

    public $jenis;
    public $warna;
    public $rasa;
	function __construc($nama, $jenis, $warna, $rasa)
{
	$this->nama= $nama;
    $this->jenis= $jenis;
    $this->warna= $warna;
    $this->rasa= $rasa;
}
function getInfo(){
	return "Nama buah: {$this->nama}\nJenis buah: {$this->jenis}\nWarna buah: {$this->warna}\nRasa buah: {$this->rasa}";
   }
  }
 $buah = new Buah("Semangka", "Berbiji", "Merah", "Manis");
 
echo "TUGAS MEMBUAT CLASS DENGAN PHP\n";
echo "--------------------------------------------------------------";
echo "Nama: Zahrotul Ilmi Wijayanti\nNIM: 21533475\nKelas: 5C\n";
echo $buah ->getInfo();
?>