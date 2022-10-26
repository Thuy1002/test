<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            // $validator= Validator::make($request->all(),[
            //     'comment'=> 'required|string'
            // ]);
            // if($validator->fails){
            //     return redirect()->back()->with('message', 'Comment area is mandetory');
            // }
            $course = Courses::where('id', $request->id_course)->first();
            if ($course) {
                Vote::create([
                    'id_course' => $course->id,
                    'id_user' => Auth::user()->id,
                    'comment' => $request->comment,
                    'ratting' => $request->ratting
                ]);
                // dd($lesson);
                return redirect()->back();
            } else {
                return redirect()->back()->with('message', 'No such ');
            }
        } else {
            return redirect()->back()->with('message', 'Login');
        }
    }
   

    public function detail( $id,$course)
    {
        $course = Courses::find($id);
        // $cmt= Vote::where('id_course', $id_course)->get();
// dd($cmt);
        return view('courses.show', [ 'course'=>$course]);
    }
}
