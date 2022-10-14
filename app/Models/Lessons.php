<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Lessons extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    protected $fillable = [
        'title', 'content', 'price', 'discount', 'img', 'video', 'view', 'status'
    ];

    public function Xoa($id)
    {
        $res = DB::table($this->table)->where('id', $id)->update(['status'=>0]);
        return 1;
    }
}
