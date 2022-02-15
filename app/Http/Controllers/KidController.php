<?php
namespace App\Http\Controllers;
use App\Models\Kid;
use App\Models\Hobby;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class KidController extends Controller
{
	public function add() {

		$kids = \App\Models\Kid::get();
		return view('kids.add', compact('kids'));
	}

	public function store() {
		$validatedData = request()->validate([
        'name' => 'required|max:255',
        'address' => 'required',
    ]);

		$kid = new Kid;
		$kid->kid_name = request()->name;
        $kid->address = request()->address;
        $kid->save();
        $kid->hobbies()->attach(request()->hobby);
        return redirect()->to("hobbies-list");
	}

	public function list() {

		$kids = \App\Models\Kid::with('hobbies')->get();
		return view('hobbies.list', compact('kids'));
	}

	public function edit($id) {

		$kid_hobby=[];

        $hobbies = \App\Models\Hobby::get();
		$kid = \App\Models\Kid::find($id);
		foreach($kid->hobbies as $hobby)
		{
			array_push($kid_hobby, $hobby->id);

		}
		//return $kid_hobby;
		return view('hobbies.add', compact('hobbies','kid','kid_hobby'));
	}

	public function update($id) {
		$kid = \App\Models\Kid::find($id); 

       $kid->kid_name = request()->kid_name;

       $kid->address = request()->address;

       $kid->update();

       $kid->hobbies()->sync(request()->hobby);

       return redirect()->to("hobbies-list");
	}
 

 }