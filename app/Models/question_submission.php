<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question_submission extends Model
{
    use HasFactory;
    function questions(){
        return $this->hasMany(question::class,"id",'ques_id');
    } 
    public function user(){
        return $this->hasOne(User::class,"id",'user_id');
    } 
}
