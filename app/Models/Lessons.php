<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Comment;

class Lessons extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    protected $fillable = [
        'title', 'content', 'video_part', 'lession_type', 'attachment', 'guard', 'order', 'status','id_chapters'
    ];
    public function Lessons() //show danh sách
    {
      $query = DB::table($this->table)->where('status','!=' ,0)->get();
      return $query;
    }

    public function Xoa($id)
    {
        $res = DB::table($this->table)->where('id', $id)->update(['status'=>0]);
        return 1;
    }

    public function user() {
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function commentLessons(){
        return $this->hasMany(Comment::class,'id_lesson','id');
    }
}
