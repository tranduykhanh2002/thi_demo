<?php 
namespace App\Models;
use ILLUMINATE\Database\Eloquent\Model;
class School extends Model {
    protected $table = 'schools';
    public function getTeacher(){
        return $this->hasMany(Teacher::class,'school_id');
    }
    public $timestamps = false;
}