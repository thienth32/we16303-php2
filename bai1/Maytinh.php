<?php
class Maytinh{
    var $giatien;
    var $hang;
    var $tgbaohanh;
}

$hp = new Maytinh();
$hp->giatien = 13000000;
$hp->hang = "HP Mỹ";
$hp->tgbaohanh = 12;

$dell = new Maytinh();
$dell->giatien = 13000000;
$dell->hang = "dell Nhật";
$dell->tgbaohanh = 24;


var_dump($hp, $dell);


?>