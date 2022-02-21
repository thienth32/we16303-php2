<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Quiz extends Model{
    protected $table = 'quizs';
    public $timestamps = false;

    public function subject(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function questions(){
        return $this->hasMany(Question::class, 'quiz_id');
    }

    public function getAvgScore(){
        return StudentQuiz::where('quiz_id', $this->id)->avg('score');
    }

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