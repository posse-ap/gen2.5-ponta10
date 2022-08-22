<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Pokemon;

class PokemonController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $countries = Country::get();
        return view('pokemon.country',compact('countries'));
    }

    public function select($id)
    {   
        $pokemons = Pokemon::where('country_id',$id)->get();
        return view('pokemon.select',compact('pokemons'));
    }

    public function box($id)
    {   
        $pokemon = Pokemon::where('pokemon_id',$id)->first();
        dd($pokemon);
        return view('pokemon.box',compact('pokemon'));
    }

    public function training($id)
    {   
        $pokemon = Pokemon::where('pokemon_id',$id)->get();
        return view('pokemon.training',compact('pokemon'));
    }

    public function pokemon_store(Request $request)
    {   
        $data = $request->all();
        $id = $data['id'];

        return redirect()->route('pokemon.box',['pokemon_id'=> $id]);
    }
}
