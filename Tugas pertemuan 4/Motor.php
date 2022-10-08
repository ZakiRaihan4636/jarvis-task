<?php

class Motor
{
  public $merek;
  public $type;
  public $warna;
  public $bensin;
  public $maxtangki;

  public function __construct($merek, $type, $warna, $bensin, $maxtangki)
  {
    $this->merek = $merek;
    $this->type = $type;
    $this->warna = $warna;
    $this->bensin = $bensin;
    $this->maxtangki = $maxtangki;
  }


  public function jalan($jarak)
  {
    $this->bensin = $this->bensin - ($jarak / 10);
    echo "Setelah menempuh jarak " . $jarak / 1000 . "km \n";
    echo "Sisa Bensin menjadi " . $this->bensin / 1000 . " Liter \n";
  }

  public function isiBensin($new_bensin)
  {
    $this->bensin = $new_bensin + $this->bensin;
    echo "Setelah isi bensin Menjadi " . $this->bensin / 1000 . " Liter \n";

    if ($this->bensin >= 5000) {
      echo "Bensin Anda sudah maxtangki";
    } else {
      echo "";
    }
  }
}

$motor1 = new Motor("Vario", "125", "Hitam", 2000, 5000);

echo "Bensin Awal " . $motor1->bensin / 1000 . " Liter" . "\n";
$motor1->jalan(10000);

// Isi bensin 4 liter ceritanya  wkwk
$motor1->isiBensin(4000);
