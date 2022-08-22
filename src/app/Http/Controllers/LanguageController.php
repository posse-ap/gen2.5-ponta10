<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;
use App\Language;
use Carbon\Carbon;

class LanguageController extends Controller
{
    //  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {   
        $user = \Auth::user();
        $language = Language::where('id', $id)->first();
        $date = Carbon::now();
        $dateCount = $date->dayOfWeek; // 0。週のうちの何日目か 0 (日曜)から 6 (土曜)
        $week = ['日','月','火','水','木','金','土'];

        for($weekCount = -$dateCount - (0 * 7); $weekCount < 7 - $dateCount - (0 * 7); $weekCount++): 
            $weekDate = date("Y-m-d",strtotime($date .  $weekCount . " day"));
            $languageSum = Study::where('user_id',$user['id'])->where('language', $language->name)->where('date', $weekDate)->sum('hour');
            $languageArray[$week[$weekCount + $dateCount + (0 * 7)]] = isset($languageSum) ? $languageSum : 0;
        endfor;
        return view('/language',compact('language','languageArray'));
    }
}
