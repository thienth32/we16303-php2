<?php
namespace App\Models;
class Quiz extends BaseModel{
    protected $tableName = 'quizs';

    public function getStudentScore(){
        $studentResult = StudentQuiz::where(['quiz_id', '=', $this->id])
                        ->andWhere(['student_id', '=', $_SESSION['auth']['id']])
                        ->first();
        if($studentResult != null){
            return $studentResult->score;
        }
        return 0;
    }
}
?>