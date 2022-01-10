<?php

class Animal{

    function __construct($ipname, $ipage)
    {
        $this->name = $ipname;
        $this->age = $ipage;
    }

    function getInfo(){
        return "xin chào, tôi tên là : " . $this->name . 
        ", Tôi năm nay: " . $this->age . " tuổi!";
    }

    function getPrice(){
        if($this->age <= 5){
            return $this->age * 1.5;
        }else if($this->age <= 10){
            return $this->age * 2.3;
        }else{
            return $this->age*3.1;
        }
    }
}

$tic = new Animal("Snake", 20);
$tic->color = "Purple";
$toc = new Animal("Fish", 25);

// echo "<pre>";
// var_dump($tic, $toc);
?>
<h2>Họ và tên: <?= $tic->name ?></h2>
<p>Tuổi: <?= $tic->age ?></p>
<p>Hair Color: <?= $tic->color ?></p>
<p><?= $tic-> getInfo() ?></p>
<p>Giá: <?= $tic->getPrice() ?></p>
<hr>
<h2>Họ và tên: <?= $toc->name ?></h2>
<p>Tuổi: <?= $toc->age ?></p>
<p>Hair Color: <?= $toc->color ?></p>
<p><?= $toc-> getInfo() ?></p>
<p>Giá: <?= $toc->getPrice() ?></p>