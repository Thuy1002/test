<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'cmtl';
    protected $fillable = [
        'id_user', 'id_lesson', 'comment', 'reply'
    ];

    public function lesson()
    {
        return $this->belongsTo(Lessons::class, 'id_lesson', 'id');
    }


}
