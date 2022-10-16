<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Chapters extends Model
{
    use HasFactory;
    protected $table = 'chapters';
    protected $fillable = [
        'title', 'order', 'id_courses', 'status'
    ];

    public function Chapters() //show danh sách
  {
    $query = DB::table($this->table)->where('status','!=' ,0)->get();
    return $query;
  }

    public function Xoa($id)
    {
        $id_chap = DB::table('lessons')->select(['id'])->where('id_chuonghoc', $id)->get();
        foreach ($id_chap as $id1) {
            DB::table('lessons')->where('id_chuonghoc', $id1->id)->update(['status'=>0]);
        }
        $res = DB::table($this->table)->where('id', $id)->update(['status'=>0]);
        return 1;
    }
}
