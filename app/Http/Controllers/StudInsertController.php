<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StudInsertController extends Controller
{
    
    public function insert(){


        return \App\Models\Student::get();
        return view('stud_create');

    }

    public function create() {

    	return view('stud_create');
    }

    public function store() {

    	//return request();
    	$post = new Student; 

$post->first_name = request()->firstname;

$post->last_name = request()->lastname;

$post->city_name = request()->cityname;

$post->email = request()->email;

$post->save();

    return response()->json(['sucesss'=>true]);
    }

    
}