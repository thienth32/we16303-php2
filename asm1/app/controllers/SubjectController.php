<?php
namespace App\Controllers;

use App\Models\Subject;

class SubjectController{
    public function index(){
        $subjects = Subject::all();

        include_once "./app/views/mon-hoc/index.php";
    }

    public function addForm(){
        include_once "./app/views/mon-hoc/add-form.php";
    }

    public function saveAdd(){
        $model = new Subject();
        $data = [
            'name' => $_POST['name']
        ];
        $model->insert($data);
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }

    public function remove(){
        $id = $_GET['id'];
        Subject::destroy($id);
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }
}
?>