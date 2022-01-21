<?php

abstract class BaseModel{

    // nội dung cần viết cho hàm này như thế nào 
    public abstract function getAll(): string;
}

interface CanOrder{
    public function payment();
    public function discount();
}

interface Shipping{
    public function payShipFee();
    public function widrawFee();
}

class Product extends BaseModel{
    // đọc tài liệu của lớp abstract và viết nội dung để đáp ứng 
    // yêu cầu của tech lead
    public function getAll(): string{
        return "";
    }
}

class Order extends BaseModel implements CanOrder, Shipping{
    public function getAll(): string{
        return "order class";
    }

    public function payment(){

    }
    public function discount(){

    }
    public function payShipFee(){

    }
    public function widrawFee(){
        
    }

}

?>