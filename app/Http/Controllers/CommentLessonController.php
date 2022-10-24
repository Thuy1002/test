<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Lessons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentLessonController extends Controller
{
    public function store(Request $request)
    {
    	if(Auth::check()){
            // $validator= Validator::make($request->all(),[
            //     'comment'=> 'required|string'
            // ]);
            // if($validator->fails){
            //     return redirect()->back()->with('message', 'Comment area is mandetory');
            // }
            $lesson= Lessons::where('id', $request->comment)->where('status', '1')->first();
            if($lesson){
                Comment::create([
                    'id_lesson'=> $lesson->id,
                    'id_user'=>Auth::user()->id,
                    'comment'=> $request->comment
                ]);
            }
            else{
                redirect()->back()->with('message', 'No such ');
            }
        }
        else
        {
            redirect()->back()->with('message', 'Login');
        }
    }
}
