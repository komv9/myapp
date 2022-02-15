<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
//use Illuminate\Support\Facades\Validator;
//use Illuminate\Validation\Rule;

class MemberController extends Controller
{
	public function add() {
		return view('member_add');
	}

	public function submit(Request $request) {

        $request=request()->validate([
            'name'          => 'required',
            'photo'         => 'required|mimes:png,jpg,jpeg',
            'designation'   => 'required',
            'department'    => 'required',
            'linkedin'      => 'required',
            'country'       => 'required',
        ]);
//return $request;
//return $request['name'];
        $member = new Member;
        $member->name = $request['name'];
        if(request()->hasFile('photo')) {
            $file = time().'.'.request()->photo->extension();
           $member->photo = 'storage/assets/'.$file;
           request()->photo->move(storage_path('app/public/assets'), $file);
         }
        $member->designation = $request['designation'];
        $member->department = $request['department'];
        $member->linkedin = $request['linkedin'];
        $member->country = $request['country'];
        $member->save();

        return response()->json(['success'=>true,'message'=>'Form submitted successfully.']);


	}

}