<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function answerWithUserInfo($id){
        $answers = DB::table('answers')
                ->select('answers.id AS answerId', 'users.id AS userId', 'answers.content', 'answers.created_at', 'users.name')
                ->join('users', 'answers.user_id', '=', 'users.id')
                ->where('answers.thread_id', '=', $id)
                ->get();
        return $answers;
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
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        $thread_id = $request->all()['id'];
        $answer = new Answer;
        $answer->content = $request->content;
        $answer->user_id = Auth::id();
        $answer->thread_id = $thread_id;
        $answer->save();

        return true;
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
        //
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
        //
    }

    public static function checkAnswerPrivilege($threadId, $answerId){
        $check = DB::table('answers')
        ->select('answers.id')
        ->where('answers.thread_id', '=', $threadId)
        ->where('answers.id', '=', $answerId)
        ->where('answers.user_id', '=', Auth::id())
        ->get();
        
        return $check;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Answer::find($id)->delete();
    }
}
