<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ThreadController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        $threads = new ThreadController;
        $threads_result = $threads->threadsWithUsersInfo();

        $tags = new TagController;
        $tags_result = $tags->popularTags();

        return view('home', ['threads' => $threads_result, 'tags' => $tags_result]);
    }

    public function thread($id, $else=1)
    {
        $thread = new ThreadController;
        $thread_result = $thread->show($id);

        $answers = new AnswerController;
        $answers_result = $answers->answerWithUserInfo($id);
        
        return view('thread', ['thread' => $thread_result, 'answers' => $answers_result]);
    }

    public function user($id){
        $user = new UserController;
        $user_result = $user->show($id);

        return view('user', ['user' => $user_result]);
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}