<?php
namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DataInsertController extends Controller
{
    
    public function see(){

        $courses = \App\Models\Course::get();
        return view('komal', compact('courses'));


    }

    public function upload(){

        //return request();
        $post = new Teacher; 

$post->firstname = request()->firstname;

$post->lastname = request()->lastname;
$post->course_id = request()->course;


$post->save();


    return response()->json(['sucesss'=>true]);
    }

    public function fetch(){

        //relationship function should be mentioned in with()
        $obj1 = \App\Models\Teacher::with('course')->get();

        return view('create',compact('obj1'));

    }

    public function tlist() {

        return Teacher::get()->course;
    }

    public function edit($id) {

        $teacher=  \App\Models\Teacher::find($id);
        return view('edit', compact('teacher'));

    }

    public function update($id) {
        $tdata = \App\Models\Teacher::find($id); 

$tdata->firstname = request()->firstname;

$tdata->lastname = request()->lastname;

$tdata->delete();

return request();
    //return response()->json(['sucesss'=>true]);
    }

    }