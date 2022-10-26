<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $table = 'rattings';
    protected $fillable = [
        'id_user', 'comment', 'id_course','status'
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function lessons()
    // {
    //     return $this->belongsTo(Lessons::class);
    // }

    public function user() {
        return $this->belongsTo(User::class,'id_user','id');
    }
    public function course(){
        return $this->belongsTo(Courses::class,'id_course','id');
    }

}
