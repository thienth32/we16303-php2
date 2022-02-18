<?php
namespace App\Controllers;

use App\Models\Subject;

class SubjectController{
    public function index(){
        $subjects = Subject::all();

        // include_once "./app/views/mon-hoc/index.php";
        return view('mon-hoc.index', [
            'subjects' => $subjects
        ]);
    }

    public function addForm(){
        include_once "./app/views/mon-hoc/add-form.php";
    }

    public function saveAdd(){
        // $newModel = Subject::create($_POST);
        // var_dump($newModel);die;
        $model = new Subject();
        $model->name = $_POST['name'];
        $model->save();
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }

    public function editForm($id){
        $model = Subject::find($id);
        include_once "./app/views/mon-hoc/edit-form.php";
    }

    public function saveEdit($id){
        $model = Subject::find($id);
        $model->name = $_POST['name'];
        $model->save();
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }

    public function remove($id){
        
        Subject::destroy($id);
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }

}
?>