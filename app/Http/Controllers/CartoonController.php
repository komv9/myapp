<?php
namespace App\Http\Controllers;
use App\Models\Cartoon;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CartoonController extends Controller
{
	public function add() {

		return view("cartoons.add");

	}

	public function store() {
		$validatedData = request()->validate([
        'name' => 'required|max:30',
        'image' => 'required|mimes:png,jpg,jpeg',
        ]);
		$cartoon = new Cartoon;
		$cartoon->name = request()->name;
        if(request()->hasFile('image')) {
            $file = time().'.'.request()->image->extension();
           $cartoon->image = 'storage/assets/'.$file;
           request()->image->move(storage_path('app/public/assets'), $file);
         }
        $cartoon->save();
        return redirect()->to("cartoon_list");
        //return request();
	}

	public function list() {
		$cartoons = \App\Models\Cartoon::get();
		return view('cartoons.list', compact('cartoons'));
	}

	public function edit($id) {
		$cartoon = \App\Models\Cartoon::find($id);
		return view('cartoons.add', compact('cartoon'));
	}

	public function update($id) {
		$cartoon = \App\Models\Cartoon::find($id); 
        $cartoon->name = request()->name;
        if(request()->hasFile('image')) {
            $file = time().'.'.request()->image->extension();
            $cartoon->image = 'storage/assets/'.$file;
            request()->image->move(storage_path('app/public/assets'), $file);
        }
        $cartoon->update();
        return redirect()->to("cartoon_list");
	}




}
