<?php

class People {
    private $name ='';
    private $age=0;
    private $dept='';

    public function getName()
    {
        return $this->name;
    }
    public function setName($n)
    {
        $this->name=$n;
    }

}

$p1 = new People;
/*$p1->name ="John";
$p1->age ="20";
$p1->dept ="finance";
var_dump($p1);

$p2 = new People;
$p2->name ="Sam";
$p2->age ="21";
$p2->dept ="HR";
var_dump($p2);
*/
$p1->setName("John");
//var_dump($p1);
echo$p1->getName();
