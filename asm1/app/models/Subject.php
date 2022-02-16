<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Subject extends Model{
    protected $table = 'subjects';
    public $timestamps = false;

    public $fillable = ['name'];
}
?>