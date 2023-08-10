<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    protected $fillable=['quiz_id','name','Question','options','Answer','status'];
    
    public function submissions(){
        return $this->hasOne(question_submission::class,"ques_id",'id');
    } 
    public function quiz(){
        return $this->hasOne(quizes::class,"id",'quiz_id');
    } 
}
