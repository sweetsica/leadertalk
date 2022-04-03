<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Dashboard after login
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function dashboard()
    {
        $infos['count_mkt'] = Question::where('category','1')->count();
        $infos['count_dvbh'] = Question::where('category','2')->count();
        $infos['count_kt'] = Question::where('category','3')->count();
        $infos['count_other'] = Question::where('category','4')->count();
        return view('dashboard',compact('infos'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if($cate=='all'){
//            $infos = Question::latest()->take(35)->sortByDesc('id')->get();
//        }elseif($cate=='mkt'){
//            dd($cate);
//            $infos = Question::where('category','=',1)->latest()->take(35)->sortByDesc('id')->get();
//        }
        $infos = Question::take(35)->get()->sortByDesc('created_at');
        return view('list_question',compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = Question::create($request->all());
        return view('thankyou');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infos = Question::where('id',$id)->first();
        return view('answear',compact('infos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infos = Question::where('id',$id)->first();
        return view('question_edit',compact('infos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = Question::findOrFail($id);
        $question['answear'] = $request->answear;
        $question['status'] = $request->status;
        $question->save();
        return redirect()->route('question.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
