<?php

namespace App\Http\Controllers;

use App\Models\Chapters;
use App\Models\Courses;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        $this->v['chapters'] = Chapters::where('status','!=' ,0)->get();

        return view('chapters.index', $this->v);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     
           $courses = new Courses();
           $this->v['courses'] = $courses->Courses();
            return view('chapters.add', $this->v);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courses = new Courses();
        $this->v['courses'] = $courses->Courses();
        $chapters = new Chapters();
        $chapters->fill($request->all());
        $chapters->save();
        return redirect()->route('chapters.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapters  $chapters
     * @return \Illuminate\Http\Response
     */
    public function show(Chapters $chapters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapters  $chapters
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapters $chapters,$id)
    {
        $courses = new Courses();
        $this->v['courses'] = $courses->Courses();
        $chapters = Chapters::find($id);
        return view('chapters.edit',[
            'chapters'=>$chapters
        ],$this->v);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapters  $chapters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapters $chapters,$id)
    {
     
        $chapters = Chapters::find($id);
        $chapters->fill($request->except(['_method', '_token']));
        $chapters->update();
        return redirect()->route('chapters.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapters  $chapters
     * @return \Illuminate\Http\RedirectResponse
     */
        public function destroy($id)
    {
        $model = new Chapters();
        $res = $model->Xoa($id);
        return redirect()->back();
    }
}
