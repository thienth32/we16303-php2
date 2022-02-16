<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Quiz extends Model{
    protected $table = 'quizs';
    public $timestamps = false;

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