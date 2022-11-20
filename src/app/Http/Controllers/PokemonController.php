<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Pokemon;
use App\Study;
use App\User;
use App\Pokemon_user;
use App\Hand;
use Illuminate\Support\Facades\Auth;

class PokemonController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pokemon.index');
    }

    public function country()
    {
        $countries = Country::get();
        return view('pokemon.country', compact('countries'));
    }

    public function select($id)
    {
        $pokemons = Pokemon::where('country_id', $id)->get();
        return view('pokemon.select', compact('pokemons'));
    }

    public function hand($status)
    {
        $user = Auth::user();
        $handPokemons = Hand::where('user_id', $user['id'])->get();
        foreach ($handPokemons as $handPokemon):
            $pokemons[] = Pokemon::where('id',$handPokemon->pokemon_id)->get();
        endforeach;
        return view('pokemon.hand',compact('handPokemons','pokemons','status'));
    }

    public function box()
    {
        $user = Auth::user();
        // $boxPokemons = User::where('id', $user['id'])->first();
        $boxPokemons = User::find($user['id']);
        $hands = Hand::where('user_id', $user['id'])->get();
        foreach($hands as $hand):
            $handPokemons[] = Pokemon::where('id', $hand->pokemon_id)->get();
            $handArray[] = $hand->pokemon_id;
            $handArrays[] = $hand->pokemon_id;
        endforeach;
        for($i = 0;$i < 6 - $hands->count();$i++){
            $handArray[] = 0;
        }
        return view('pokemon.box',compact('boxPokemons','handPokemons','handArray','handArrays'));
    }

    public function training($id)
    {
        $training = Hand::where('id', $id)->first();
        $pokemon_id = $training->pokemon_id;
        $pokemon = Pokemon::where('id', $pokemon_id)->first();

        $user = Auth::user();
        $count  = Pokemon_user::where('user_id', $user['id'])->sum('hour');
        $sum = Study::where('user_id',$user['id'])->sum('hour');
        $exp = floor($sum - $count);

        return view('pokemon.training', compact('pokemon','exp'));
    }

    public function pokemon_store(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        $user = Auth::user();
        Pokemon_user::create([
            'user_id' => $user['id'],
            'pokemon_id' => $id,
            'hour' => 0
        ]);
        $count = Pokemon_user::where('user_id', $user['id'])->count();
        if($count < 7){
            Hand::create([
                'id' => $count+1,
                'user_id' => $user['id'],
                'pokemon_id' => $id,
            ]);
}
        return redirect()->route('pokemon.box', ['id' => $id]);
    }

    public function hand_store(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        foreach($data['hand'] as $key => $hand):
        $count = Pokemon_user::where('user_id', $user['id'])->count();
        if($count < 7){
                    Hand::create([
                        'id' => $key,
                        'user_id' => $user['id'],
                        'pokemon_id' => 0,
                    ]);
                }
        //変更可能性あり
        Hand::where('user_id', $user['id'])->where('id',$key+1)->update([
            'pokemon_id' => $hand,
        ]);
        endforeach;
        return redirect()->route('pokemon.hand',['status' => 2]);
    }
}
