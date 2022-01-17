<?php


class LopCha{

    public $name, $age;
    function getName(){
        return "Xin chào, tên tôi là: " . $this->name;
    }
}

class LopCon extends LopCha{
    function getName(){
        return strtoupper(parent::getName());
    }
}

$x = new LopCon();
$x->name = "Nguyen Van A";
echo $x->getName();

?>