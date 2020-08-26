<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Subject;
use App\Qualification;
class Teacher extends Model
{
    protected $fillable = ['university','description','user_id','college_career','url_telegram','whatsapp'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function subjects(){
        return $this->hasMany(Subject::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function qualifications()
    {
        return $this->hasMany(Qualification::class);
    }
}

