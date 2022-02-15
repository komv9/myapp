<?php
namespace App\Http\Controllers;
use App\Models\Atrist;
use App\Models\Skill;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ArtistController extends Controller
{
	public function add() {
		return view('artists.add');
	}

	public function store() {
		$validatedData = request()->validate([
        'artist_name' => 'required|max:255',
        'income' => 'required',
    ]);
		$artist = new Artist;
		$artist->artist_name = request()->name;
        $artist->income = request()->address;
        $artist->save();
        $employee->skills()->attach(request()->skill);
        return redirect()->to("artist_list");
	}

	public function list() {
		return "True";
	}
}