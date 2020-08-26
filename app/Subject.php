<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teacher;

class Subject extends Model
{
    protected $fillable = ['name_suject','price','content','description','teacher_id'];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
