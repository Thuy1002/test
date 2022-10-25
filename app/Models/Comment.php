<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'cmtl';
    protected $fillable = [
        'id_user', 'id_lesson', 'comment', 'reply','status'
    ];

    public function lesson()
    {
        return $this->belongsTo(Lessons::class, 'id_lesson', 'id');
    }
    public function Xoa($id)
    {
        $res = DB::table($this->table)->where('id', $id)->update(['status'=>1]);
        return 1;
    }


}
