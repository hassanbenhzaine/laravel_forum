<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return Thread::All();
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
        $thread = new Thread;
        $thread->title = $request->title;
        $thread->content = $request->content;
        $thread->user_id = Auth::id();
        $thread->save();

        return true;
    }

    public function threadsWithTag($id){
        $threads = DB::table('thread_tags')
        ->select('users.name AS userName' , 'tags.name', 'threads.id', 'threads.user_id', 'threads.title', 'threads.content', 'threads.user_id', 'threads.created_at', 'tags.name')
        ->join('tags', 'thread_tags.tag_id', '=', 'tags.id')
        ->join('threads', 'thread_tags.thread_id', '=', 'threads.id')
        ->join('users', 'threads.user_id', '=', 'users.id')
        ->where('thread_tags.tag_id', '=', $id)
        ->get();
        
        return $threads;
    }

    public function threadsWithUsersInfo(){
        $answers = DB::table('threads')
        ->select('threads.id AS threadId', 'users.id AS userId', 'threads.title', 'threads.created_at', 'threads.content', 'users.name' )
        ->join('users', 'threads.user_id', '=', 'users.id')
        ->get();

        return $answers;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Thread::find($id);
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
