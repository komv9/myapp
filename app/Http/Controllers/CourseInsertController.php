<?php
namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CourseInsertController extends Controller
{
	public function home() {
		return view('home');
	}
	public function add() {
		return view('add');
	}
	public function added() {

        $course = new Course; 
        $course->name = request()->name;
        $course->date = request()->date;
        $course->start_time = request()->start_time;
        $course->end_time = request()->end_time;
        $course->save();
        return redirect()->to("list");
	}

	public function index() {
		$courses = \App\Models\Course::get();
		return view('courses.list',compact('courses'));
	}

	public function update($id) {
		$course = \App\Models\Course::find($id); 

$course->name = request()->name;

$course->date = request()->date;

$course->start_time = request()->start_time;

$course->end_time = request()->end_time;

$course->update();

return redirect()->to("list");

	}

	public function edit($id) {
		$course = \App\Models\Course::find($id);
		return view('add', compact('course'));
	}

	public function delete($id) {
		$course = \App\Models\Course::find($id);
		$course->delete();
		return redirect()->to("list");
	}
 
 
 }