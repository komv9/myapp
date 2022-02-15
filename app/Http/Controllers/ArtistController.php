<?php
namespace App\Http\Controllers;
use App\Models\Artist;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ArtistController extends Controller
{
	public function add() {
		$cities = \App\Models\City::get();
		return view('artists.add', compact('cities'));
	}

	public function store() {
		$validatedData = request()->validate([
        'artist_name' => 'required|max:255',
        'income' => 'required',
        ]);
		$artist = new Artist;
		$artist->artist_name = request()->artist_name;
        $artist->income = request()->income;
        $artist->city_id = request()->city;
        $artist->save();
        return redirect()->to("artist_list");
        //return request();
	}

	public function list() {
		$artists = \App\Models\Artist::with('city')->get();
		return view('artists.list',compact('artists'));
	}

	public function edit($id) {
		$artist=  \App\Models\Artist::find($id);
        return view('artists.add', compact('artist'));
	}

	public function update($id) {
		$artist = \App\Models\Artist::find($id); 
        $artist->artist_name = request()->artist_name;
        $artist->income = request()->income;
        $artist->city_id = request()->city;
        $artist->update();
        return redirect()->to("artists_list");
	}
}