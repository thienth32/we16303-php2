<?php
namespace App\Controllers;

use App\Models\Quiz;
use App\Models\Subject;

class QuizController{

    public function  listQuizs(){
        $subjectId = $_GET['subject_id'];
        $subject = Subject::where(["id", '=', $subjectId])->first();
        
        $quizs = Quiz::where(["subject_id", '=', $subjectId])->get();
        
        include_once "./app/views/quizs/student-quizs.php";
    }
    
}
?>