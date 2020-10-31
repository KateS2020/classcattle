<?php

class Cattle{

    private $power=0;
    private $volume =0;
    private $isOpenLid = false;
    private $currentVolume =0;
    private $startTemp =0;

    public function pourWater ($n, $t){
        if($n>$this->volume)
        return false;
        else
        $this->currentVolume+=$n;
        $this->startTemp =$t;
    }
       

    public function __construct($p, $v)
    {
        $this->power=$p;
        $this->power=$v;
    }

    public function openLid(){


        $this->isOpenLid=true;
    }
    public function closeLid(){

        $this->isOpenLid=false;

    }

    public function boilWater() {

        if ($this->isOpenLid == true){
            echo "Lid is open";
            return false;
        }

        for ($i = $this->startTemp; $i<100; $i+=10)
            echo "Temp of water is" .$i."<br>";    

            
    }

}
$k1 =new Cattle(1000, 1500);
$k1 ->openLid();
$k1->pourWater (1000, 20);
$k1 ->closeLid();
$k1->boilWater();






$k2 =new Cattle(800, 1250);
$k3 =new Cattle(1500, 1300);

