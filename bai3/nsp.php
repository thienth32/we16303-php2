<?php
// function test(){
//     echo "test1";
// }


// function test($x){
//     echo $x;
// }


// class Animal{}

// class Animal{}


// const TBL_NAME = 'users';
// const TBL_NAME = 'products';
// nguyên nhân vì sao cần có namespace

namespace A1;
function test(){
    echo "A1 function ";
}

const TBL_NAME = 'users';


namespace A2;
function test(){
    echo "A2 function ";
}

const TBL_NAME = 'products';



// \A1\test();
echo \A1\TBL_NAME;

// nguyên nhân cần phải sử dụng namespace?
// namespace là gì?
// phạm vi của namespace thì tính như thế nào?
// tại namespace A muốn tạo 1 object thuộc class đc định nghĩa ở namespace B thì phải làm sao?
// có bao nhiêu cách?
?>