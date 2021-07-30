<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Genre;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::with('genres')->paginate(5);
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $directors = Director::all();
        return view('movies.create', compact('directors', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required',
            'director_id' => 'required',
            'description' => 'required',
            'plot' => 'required',
            'poster' => 'required|image|mimes:jpeg,jpg,png|max:1024'
        ]);

        $movie = $request->all();

        if($poster = $request->file('poster')){
            $savePoster = 'images/';
            $moviePoster = date('YmdHis').".". $poster->getClientOriginalExtension();
            $poster->move($savePoster, $moviePoster);
            $movie['poster'] = "$moviePoster";
        }

        $mov = Movie::create($movie);
        $genres = $request->genres;

        if ($request->genres) {
            $mov->genres()->attach($genres);
        }
        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movie::with('genres')->get();
        foreach ($movies as $movie) {
            if ($movie->id == $id) {
                $genres = Genre::get();
                $directors = Director::all();
                return view('movies.edit', compact('directors', 'genres', 'movie'));
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        /* $request->validate([
            'title' => 'required',
            'year' => 'required',
            'director_id' => 'required',
            'genres[]' => 'required',
            'description' => 'required',
            'plot' => 'required'
        ]); */
        
        $mov = $request->all();
        $genres = $request->genres;

        if($poster = $request->file('poster')){
            $savePoster = 'images/';
            $moviePoster = date('YmdHis').".". $poster->getClientOriginalExtension();
            $poster->move($savePoster, $moviePoster);
            $mov['poster'] = "$moviePoster";
        }else{
            unset($movie['poster']);
        }

        $movie->update($mov);
        

        if ($request->genres) {
            $movie->genres()->sync($genres);
        }

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
