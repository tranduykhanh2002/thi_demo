<?php 

namespace App\Models;
use ILLUMINATE\Database\Eloquent\Model;
class Project extends Model{
    protected $table = 'projects';
    public function getMember(){
        return $this->hasMany(Member::class,'project_id');
    }
    public $timestamps = false;
}