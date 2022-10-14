<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Courses extends Model
{
    use HasFactory;
    protected  $table = 'courses';
    protected $fillable = [
        'title', 'content','price','discount','img', 'video','view','status'
    ];

    public function Xoa($id)
    {
      $res = DB::table($this->table)->delete($id);
      DB::table('chapters')->where('id_courses', $id)->delete($id);;
      return $res;
    }
}
