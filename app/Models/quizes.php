<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizes extends Model
{
    use HasFactory;
    protected $fillable=['name','Description','date','Time','Number_of_question'];
 
    function questions(){
        return $this->hasMany(question::class,"quiz_id");
    } 
}
