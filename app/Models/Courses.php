<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Parser\Block\ParagraphParser;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = [
        'title', 'content', 'price', 'discount', 'img', 'video', 'view', 'status'
    ];

    public function Xoa($id)
    {
        $id_chap = DB::table('chapters')->select(['id'])->where('id_courses', $id)->get();
            foreach ($id_chap as $id1) {
                    DB::table('lessons')->where('id_chuonghoc', $id1->id)->update(['status'=>0]);
                }
            DB::table('chapters')->where('id_courses', $id)->update(['status'=>0]);
        $res = DB::table($this->table)->where('id', $id)->update(['status'=>0]);
        return 1;
    }
}
