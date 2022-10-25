<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lessons;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment_lessons';
    protected $fillable = [
        'id_user', 'id_mentor', 'id_lesson', 'comment', 'reply', 'status'
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
    public function lesson(){
        return $this->belongsTo(Lessons::class,'id_lesson','id');
    }

}
