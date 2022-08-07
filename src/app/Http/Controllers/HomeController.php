<?php

namespace App\Http\Controllers;

use App\Study;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $user = \Auth::user();
        $today = date('Y-m-d');
        $month = date('Y-m');
        $todaySum = Study::where('user_id',$user['id'])->whereDate('date', 'LIKE' ,'%'.$today.'%')->sum('hour');
        $monthSum = Study::where('user_id',$user['id'])->whereDate('date', 'LIKE' ,'%'.$month.'%')->sum('hour');
        $sum = Study::where('user_id',$user['id'])->sum('hour');

        //日ごと
        for ($dayNum = 1; $dayNum < 32; $dayNum++):
            $day = sprintf('%002d', $dayNum);
            $date = $month .'-' .$day;
            $dateSum = Study::where('user_id',$user['id'])->where('date','LIKE', $date.'%')->sum('hour');
            $dateArray[$day] = isset($dateSum) ? $dateSum : 0;
        endfor;

        //コンテンツごと
        $contents = ['N予備校','ドットインストール','POSSE課題'];
        foreach($contents as $content): 
        $contentSum = Study::where('user_id',$user['id'])->where('content', $content)->sum('hour');
        $contentArray[$content] = isset($contentSum) ? $contentSum : 0;
        endforeach;
        
        //言語ごと
        $languages = ['HTML','CSS','JavaScript','PHP','Laravel','SQL','React','その他'];
        foreach($languages as $language): 
        $languageSum = Study::where('user_id',$user['id'])->where('language', $language)->sum('hour');
        $languageArray[$language] = isset($languageSum) ? $languageSum : 0;
        endforeach;

        return view('home',compact('sum','todaySum','monthSum','dateArray','contentArray','languageArray'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = \Auth::user();
        $create_hour = Study::insertGetId([
            'user_id' => $user['id'],
            'hour' => $data['time'],
            'content' => $data['contents'],
            'language' => $data['language'],
            'date' => $data['date'],
        ]);
        return redirect('/home');
    }

    // public function time_store(Request $request)
    // {
    //     $data = $request->all();
    //     $user = \Auth::user();
    //     $date = date("Y-m-d");
    //     $create_hour = Study::insertGetId([
    //         'user_id' => $user['id'],
    //         'hour' => $data['timerHour'],
    //         'content' => $data['contents'],
    //         'language' => $data['languages'],
    //         'date' => $date,
    //     ]);
    //     return redirect('/home');
    // }
}
