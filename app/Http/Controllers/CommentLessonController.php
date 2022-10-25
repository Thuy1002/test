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
            $lesson= Lessons::where('id', $request->id_lesson)->first();
            if($lesson){
                Comment::create([
                    'id_lesson'=> $lesson->id,
                    'id_user'=>Auth::user()->id,
                    'comment'=> $request->comment
                ]);
                // dd($lesson);
                return redirect()->back();
            }
            else{
               return redirect()->back()->with('message', 'No such ');
            }
        }
        else
        {
           return redirect()->back()->with('message', 'Login');
        }
    }
    public function showcmt($id_lesson, $id)
    {
        $lessons = Lessons::find($id);
        $cmt= Comment::where('id_lesson', $id_lesson)->where('status','!=' ,1)->get();
// dd($cmt);
        return view('lessons.show', ['cmt'=>$cmt, 'lessons'=>$lessons]);
    }

    public function reply($id_comment, Request $request )
    {
        $lesson= Lessons::where('id', $request->id_lesson)->first();

        $cmt = Comment::create([
            'id_lesson'=> $lesson->id,
            'id_user'=>Auth::user()->id,
            'comment'=> $request->replycmt,
            'reply'=> $id_comment
        ]);
        // dd($cmt);
        return redirect()->back();
    }
    public function destroy($id)
    {
        $model = new Comment();
        $res = $model->Xoa($id);
        return redirect()->back();
    }
}
