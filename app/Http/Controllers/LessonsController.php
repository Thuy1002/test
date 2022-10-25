<?php

namespace App\Http\Controllers;

use App\Models\Chapters;
use App\Models\Comment;
use App\Models\Courses;
use App\Models\Lessons;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->v['lessons'] = Lessons::where('status','!=' ,0)->get();

        return view('lessons.index', $this->v);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
     
           $chapter = new Chapters();
           $this->v['chapter'] = $chapter->Chapters();
            return view('lessons.add', $this->v);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $chapter = new Chapters();
        $this->v['chapter'] = $chapter->Chapters();
        $chapters = new Lessons();
        $chapters->fill($request->all());
        $chapters->save();
        return redirect()->route('lessons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function show(Lessons $lessons,$id)
    {
       
        $lessons = Lessons::find($id);
       
        $lessons = Lessons::find($id);
        return view('lessons.show',[
            'lessons'=>$lessons
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function edit(Lessons $lessons,$id)
    {
        //
        $chapter = new Chapters();
        $this->v['chapter'] = $chapter->Chapters();
        $lessons = Lessons::find($id);
        return view('lessons.edit',[
            'lessons'=>$lessons
        ],$this->v);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lessons $lessons,$id)
    {
        //
        $lessons = Lessons::find($id);
        $lessons->fill($request->except(['_method', '_token']));
        $lessons->update();
        return redirect()->route('lessons.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $model = new Lessons();
        $res = $model->Xoa($id);
        return redirect()->back();
    }
}
