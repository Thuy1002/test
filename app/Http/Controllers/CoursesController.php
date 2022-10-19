<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CoursesController extends Controller
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
        $this->v['courses'] = Courses::where('status','!=' ,0)->get();

        return view('courses.index', $this->v);
    }
    public function home()
    {
        //
       

        return view('layouts.master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('courses.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courses = new Courses();
        $courses->fill($request->all());
        $name=$request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path().'/images/', $name);
        $courses->img = $name;  
        $courses->save();
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Courses $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Courses $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses,$id)
    {
        $courses = Courses::find($id);
        return view('courses.edit',[
            'courses'=>$courses
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Courses $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $courses = Courses::find($id);
        $courses->fill($request->except(['_method', '_token']));

        if(!empty($request->file('img'))){
        $name=$request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path().'/images/', $name);
        $courses->img = $name;  
        }
        $courses->update();
            return redirect()->route('courses.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Courses $courses
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function destroy(Courses $courses)
    // {
    //     //
    // }
    public function destroy($id)
    {
        $model = new Courses();
        $res = $model->Xoa($id);
        return redirect()->back();
    }
}
