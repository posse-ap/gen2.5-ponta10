<?php

namespace App\Http\Controllers;

use App\Study;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {   
        $today = date('Y-m-d');
        $month = date('Y-m');
        $todaySum = Study::whereDate('date', 'LIKE' ,'%'.$today.'%')->sum('hour');
        $monthSum = Study::whereDate('date', 'LIKE' ,'%'.$month.'%')->sum('hour');
        $sum = Study::sum('hour');

        //日ごと
        for ($dayNum = 1; $dayNum < 32; $dayNum++):
            $day = sprintf('%002d', $dayNum);
            $date = $month .'-' .$day;
            $dateSum = Study::where('date','LIKE', $date.'%')->sum('hour');
            $dateArray[$day] = isset($dateSum) ? $dateSum : 0;
        endfor;

        //コンテンツごと
        $contents = ['N予備校','ドットインストール','POSSE課題'];
        $contentArray = [''];
        foreach($contents as $content): 
        $contentSum = Study::where('content', $content)->sum('hour');
        $contentArray[$content] = isset($contentSum) ? $contentSum : 0;
        endforeach;
        unset($contentArray[0]);
        
        //言語ごと
        $languages = ['HTML','CSS','JavaScript','PHP','Laravel','SQL','React','その他'];
        $languageArray = [''];
        foreach($languages as $language): 
        $languageSum = Study::where('language', $language)->sum('hour');
        $languageArray[$language] = isset($languageSum) ? $languageSum : 0;
        endforeach;
        unset($languageArray[0]);
        return view('home',compact('sum','todaySum','monthSum','dateArray','contentArray','languageArray'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $create_hour = Study::insertGetId([
            'hour' => $data['time'],
            'content' => $data['contents'],
            'language' => $data['language'],
            'date' => $data['date'],
        ]);
        return redirect('/home');
    }
}
