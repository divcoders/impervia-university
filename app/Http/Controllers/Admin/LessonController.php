<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Course;
use App\Category;
use App\Section;
use App\Lesson;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($section_slug)
    {
		return view('admin.lesson.create', ['section_slug'=>$section_slug]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $section = Section::where('slug', $request->input('section_slug'))->first();
		$id = DB::table('lessons')->insertGetId(
			array('name' => $request->input('name')
      , 'section_id' => $section->id
      , 'slug' => str_slug($request->input('name'))
			, 'description'=>$request->input('description')
			, 'video_code'=>$request->input('video_code')
			)
		);
		return redirect(route('courses.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $lesson = Lesson::where('slug', $slug)->first();
        return view('admin.lesson.edit', ['lesson'=>$lesson]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
       $lesson = Lesson::where('id', $id)->first();
       $lesson->name = $request->input('name');
       $lesson->slug = str_slug($request->input('name'));
       $lesson->description = $request->input('description');
       $lesson->video_code = $request->input('video_code');
       $lesson->save();
       return redirect(route('courses.index'));
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $destroy = Lesson::destroy($id);
         return redirect(route('courses.index'));
     }
}
