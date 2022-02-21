<?php
namespace App\Controllers;

use App\Models\Quiz;
use App\Models\Subject;

class QuizController{

    public function  index(){
        $subjects = Subject::all();
        $subjectId = isset($_GET['subject_id']) ? $_GET['subject_id'] : $subjects[0]->id;
        $quizs = Quiz::where('subject_id', $subjectId)->get();

        return view('quiz.index', [
            'subjects' => $subjects,
            'subjectId' => $subjectId,
            'quizs' => $quizs
        ]);
    }
    
}
?>