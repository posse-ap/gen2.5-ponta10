<?php

namespace App\Http\Controllers;

use App\Study;
use App\Todo;
use App\Language;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {   
        $user = \Auth::user();
        $today = date('Y-m-d');
        $month = date('Y-m');
        $date = Carbon::now();
        $monthDate = date("Y-m",strtotime($date . '-' . $id . " month"));  
        $todaySum = Study::where('user_id',$user['id'])->whereDate('date', 'LIKE' ,'%'.$today.'%')->sum('hour');
        $monthSum = Study::where('user_id',$user['id'])->whereDate('date', 'LIKE' ,'%'.$monthDate.'%')->sum('hour');

        $sum = Study::where('user_id',$user['id'])->sum('hour');

        for($i = 0; $i < 24; $i++){
            $monthSelection = date("Y-m",strtotime($date . '-' . $i . "month"));
            $monthDateArray[] = $monthSelection;
        }

        $languages = Language::where('status',1)->get();
        //日ごと
        for ($dayNum = 1; $dayNum < 32; $dayNum++):
            $day = sprintf('%002d', $dayNum);
            $date = $monthDate .'-' .$day;
            $dateSum = Study::where('user_id',$user['id'])->where('date','LIKE', $date.'%')->sum('hour');
            $dateArray[$day] = isset($dateSum) ? $dateSum : 0;
        endfor;

        //コンテンツごと
        $contents = ['N予備校','ドットインストール','POSSE課題'];
        foreach($contents as $content): 
        $contentSum = Study::where('user_id',$user['id'])->where('content', $content)->where('date','LIKE',$monthDate.'%')->sum('hour');
        $contentArray[$content] = isset($contentSum) ? $contentSum : 0;
        endforeach;
        //言語ごと
        // $languages = ['HTML','CSS','JavaScript','PHP','Laravel','SQL','React','その他'];

        foreach($languages as $language): 
        $languageSum = Study::where('user_id',$user['id'])->where('language', $language->name)->where('date','LIKE',$monthDate.'%')->sum('hour');
        $languageArray[$language->name] = isset($languageSum) ? $languageSum : 0;
        endforeach;

        return view('/home',compact('sum','todaySum','monthSum','dateArray','contentArray','languageArray','monthDateArray','id','languages'));
    }

    public function week($id)
    {   
        $user = \Auth::user();
        $today = date('Y-m-d');
        $month = date('Y-m');
        $todaySum = Study::where('user_id',$user['id'])->whereDate('date', 'LIKE' ,'%'.$today.'%')->sum('hour');

        //週ごと
        $date = Carbon::now();
        $dateCount = $date->dayOfWeek; // 0。週のうちの何日目か 0 (日曜)から 6 (土曜)
        $week = ['日','月','火','水','木','金','土'];
        $languages = ['HTML','CSS','JavaScript','PHP','Laravel','SQL','React','WordPress','GitHub'];
        for ($weekCount = -$dateCount - ($id * 7); $weekCount < 7 - $dateCount - ($id * 7); $weekCount++):
            $weekDate = date("Y-m-d",strtotime($date .  $weekCount . " day"));
            $weekDateArray2[$week[$weekCount + $dateCount + ($id * 7)]] = $weekDate;
            $dateSum = Study::where('user_id',$user['id'])->where('date', $weekDate)->sum('hour');
            $weekArray[$week[$weekCount + $dateCount + ($id * 7)]] = isset($dateSum) ? $dateSum : 0;


            $todos = Todo::where('user_id',$user['id'] )->where('status',1)->where('deadline', $weekDate)->orderBy('deadline','asc')->get();
            $done_todos = Todo::where('user_id',$user['id'] )->where('status',2)->where('deadline', $weekDate)->orderBy('deadline','asc')->get();
            if(count($todos) == 0){
                $todos[] = '';
            }
            if(count($done_todos) == 0){
                $done_todos[] = '';
            }
            foreach($todos as $todo):
            $todoArray[] = $todo;
            endforeach;
            foreach($done_todos as $done_todo):
            $done_todoArray[] = $done_todo; 
            endforeach;
        endfor;
        $weekAfterArray = array_splice($weekDateArray2,$dateCount);


            foreach($languages as $language):
                for($weekCount = -$dateCount - ($id * 7); $weekCount < 7 - $dateCount - ($id * 7) - $dateCount; $weekCount++): 
                    $weekDate = date("Y-m-d",strtotime($date .  $weekCount . " day"));
            $languageSum = Study::where('user_id',$user['id'])->where('language', $language)->where('date', $weekDate)->sum('hour');
            $languageArray[$week[$weekCount + $dateCount + ($id * 7)]] = isset($languageSum) ? $languageSum : 0;
                endfor;
            $languageWeek = array_sum($languageArray);
            $languageWeekArray[$language] = $languageWeek;
            endforeach;


            $languageAll = array_sum($languageWeekArray);

            foreach($languages as $language):
                for($weekCount = -$dateCount - ($id * 7); $weekCount < 7 -$dateCount - ($id * 7); $weekCount++): 
            $weekDate = date("Y-m-d",strtotime($date .  $weekCount . " day"));
            $languageSum = Study::where('user_id',$user['id'])->where('language', $language)->where('date', $weekDate)->sum('hour');
            $languageArray[$week[$weekCount + $dateCount + ($id * 7)]] = isset($languageSum) ? $languageSum : 0;
                endfor;
            $languageWeek = array_sum($languageArray);
            $languageAll == 0 ? $languageWeekRatioArray[$language] = 0 : $languageWeekRatioArray[$language] = round( $languageWeek / $languageAll ,2) * 100;
            endforeach;

        $weekSum = array_sum($weekArray);
        $averageArray = array_filter($weekArray,function($value){
            return $value !== 0;
        });
        $averageCount = count($averageArray);
        $averageCount == 0 ? $avg = 0 : $avg = $weekSum / $averageCount;
        $average = round($avg,1);

        for($i = 0; $i < 12; $i++):
            for ($weekCount = -$dateCount - ($i * 7); $weekCount < 7 - $dateCount - ($i * 7); $weekCount++):
                $weekDate = date("Y-m-d",strtotime($date .  $weekCount . " day"));
            $divisionWeekDate = substr($weekDate,5);
            $weekDateArray[$week[$weekCount + $dateCount + ($i * 7)]] = $divisionWeekDate;
            endfor;
            $weeks[] = $weekDateArray["日"] . '~' . $weekDateArray["土"];
        endfor;

        return view('week',compact('todaySum','weekSum','average','languageWeekArray','languageWeekRatioArray','weekArray','todoArray','done_todoArray','weekAfterArray','weeks','id'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $user = \Auth::user();
        $create_hour = Study::insertGetId([
            'user_id' => $user['id'],
            'hour' => $data['times'],
            'content' => $data['contents'],
            'language' => $data['language'],
            'date' => $data['date'],
        ]);
        return redirect('/home');
    }

    function todo_store(Request $request)
    {
        $data = $request->all();
        $user = \Auth::user();
        $create_todo = Todo::insertGetId([
            'user_id' => $user['id'],
            'text' => $data['todo'],
            'status' => 1,
            'deadline' => $data['deadline'],
        ]);
        return redirect()->route('week',['id' => 0]);
    }

    public function todo_update(Request $request, $todo_id)
    {
        $data = $request->all();
        Todo::where('id',$todo_id)->update(['status' => 2]);

        return redirect()->route('week',['id' => 0]);
    }

    public function todo_delete(Request $request, $todo_id)
    {
        $data = $request->all();
        Todo::where('id',$todo_id)->update(['status' => 3]);

        return redirect()->route('week',['id' => 0]);
    }

    public function month_store(Request $request)
    {
        $data = $request->all();
        $id = $data['month'];
        return redirect()->route('home',['id' => $id]);
    }

    public function week_store(Request $request)
    {
        $data = $request->all();
        $id = $data['week'];
        return redirect()->route('week',['id' => $id]);
    }

    public function language_store(Request $request)
    {
        $data = $request->all();
        $user = \Auth::user();
        $create_todo = Language::insertGetId([
            'user_id' => $user['id'],
            'name' => $data['languageName'],
            'text' => $data['languageText'],
            'status' => 1,
        ]);
        return redirect()->route('home',['id' => 0]);
    }

    public function language_delete(Request $request,$language_id)
    {
        $data = $request->all();
        $user = \Auth::user();
        $data = $request->all();
        Language::where('id',$language_id)->update(['status' => 2]);

        return redirect()->route('home',['id' => 0]);
    }
}
