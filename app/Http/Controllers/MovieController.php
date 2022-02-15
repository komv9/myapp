<?php
namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\User;
use App\Models\Userrating;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
	public function index() {

        /*$movies_data = Http::get('https://api.themoviedb.org/3/discover/movie?api_key=c445112db4261d9f7bee6df4fa4e0a5e&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_watch_monetization_types=flatrate')->json();
        $movies_list = $movies_data['results'];
        //dump($movies_list);
        foreach($movies_list as $moviej) {
        	$movie = new Movie;
        	$movie->movie_id = $moviej['id'];
        	$movie->original_language = $moviej['original_language'];
        	$movie->original_title = $moviej['original_title'];
        	$movie->overview = $moviej['overview'];
        	$movie->popularity = $moviej['popularity'];
        	$movie->release_date = $moviej['release_date'];
        	$movie->title = $moviej['title'];
        	$movie->save();
        }
        //return $popularMovies;
        */
        //$fetch_movies = \App\Models\Movie::orderBy('popularity', 'ASC')->get();
        $fetch_movies = \App\Models\Movie::get();
		return view('index', compact('fetch_movies'));

	}
	public function edit($id) {
		return "true";
	}

	public function rate($id) {
		$movie = \App\Models\Movie::find($id);
		return view('rate', compact('movie'));
	}

	public function update($id) {

		if(! auth()->check()) {

		$user = new User;
		$user->name = request()->user_name;
		$user->email = request()->email;
		$user->password = \Hash::make("1234");
		$user->save();
        }
        else {
        	$user = auth()->user();
        }

		$userrating = new Userrating;
        $userrating->user_id = $user->id;
        $userrating->username = $user->name;
        $userrating->movie_id = $id;
        $userrating->rating = request()->rate;
        $userrating->save();
        return redirect()->to("movies");
	}

	public function ratings($id) {

		$movie = \App\Models\Movie::with('userratings.user')->find($id);
		//return $movie;
		return view('ratings', compact('movie'));
	}

}
