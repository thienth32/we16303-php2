<?php
namespace App\Controllers;

use App\Models\Subject;

class SubjectController{
    public function index(){
        $subjects = Subject::all();

        include_once "./app/views/mon-hoc/index.php";
    }
}
?>