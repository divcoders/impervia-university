<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Course;
use App\Category;

class CoursesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function courses($category_slug=''){


        if($category_slug==''){
            $courses = Course::all();
            return view('courses', ['courses'=>$courses]);
        }else{
          $category = Category::where('slug', $category_slug)->first();
          $courses = $category->courses->all();
            return view('courses', ['courses'=>$courses, 'category'=>$category]);
        }

    }
    public function show($slug){
      $course = Course::where('slug', $slug)->first();
      return view('course', ['course'=>$course]);
    }
}
