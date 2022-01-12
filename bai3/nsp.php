<?php
// nguyên nhân vì sao cần có namespace

namespace A1;
function test(){
    echo "A1 function ";
}
class Animal{}

const TBL_NAME = 'users';


namespace A2;
function test(){
    echo "A2 function ";
}
class Animal{}

const TBL_NAME = 'products';

namespace A3;
use A1\Animal;
use A2\Animal as Animal2;

$x = new Animal();
$y = new Animal2();

var_dump($x, $y);


?>