<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Course;
use App\Category;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
		$courses = Course::all();
    	return view('admin.course.index', ['courses'=>$courses]);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		// $categories = DB::table('categories')->get();
		$categories = Category::all();
		return view('admin.course.create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $course = New Course;
    $course->name = $request->input('name');
    $course->slug = str_slug($request->input('name'));
    $course->description = $request->input('description');
    $course->price = $request->input('price');
    $course->save();
    $course->categories()->attach($request->input('categories'));
		return redirect(route('courses.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($slug)
     {
         $course = Course::where('slug', $slug)->first();
         //echo '<pre>', var_dump($category);
         //exit();
           return view('admin.course.show', ['course'=>$course]);
     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($slug)
     {
        $course = Course::where('slug', $slug)->first();
        return view('admin.course.edit', ['course'=>$course]);
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
        $course = Course::where('id', $id)->first();
        $course->categories()->sync($request->input('categories'));
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->price = $request->input('price');
        $course->save();
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
      $destroy = Course::destroy($id);
      return redirect(route('courses.index'));
    }
}
