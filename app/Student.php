<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Teacher;

class Student extends Model
{
    protected $fillable = ['user_id','teacher_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
