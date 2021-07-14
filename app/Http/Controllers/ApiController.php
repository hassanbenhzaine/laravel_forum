<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\AnswerController;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeThread(Request $request)
    {
        $store_thread = new ThreadController;
        $store_thread_result = $store_thread->store($request);

        $thread_category = new ThreadCategoryController;
        $thread_category->store($request, $store_thread_result);

        $request_tags = array_map('trim', explode(',', $request->tags));
        $tags = new TagController;
        $store_tags_result = $tags->store($request_tags);

        // $thread_tags = new ThreadTagController;
        // $thread_tags->store($store_thread_result, $store_tags_result);



        return redirect('/thread?id='.$store_thread_result->id);
    }

    public function editThread(Request $request){
        $threadId = $request->all()['id'];

        $thread = new ThreadController;
        $thread->edit($threadId, $request);

        return redirect('/');
    }

    public function deleteThread(Request $request){

        $threadId = $request->all()['id'];
        
        $thread = new ThreadController;
        $thread->destroy($threadId);

        return redirect('/');
    }

    public function storeAnswer(Request $request)
    {
        $threadId = $request->All()['id'];
        $answer = new AnswerController;
        $answer->store($request);

        return redirect('/thread?id='.$threadId);
    }

    public function deleteAnswer(Request $request)
    {
        $answerId = $request->All()['id'];
        $threadId = $request->All()['thread'];
        $answer = new AnswerController;
        $answer->destroy($answerId);

        return redirect('/thread?id='.$threadId);
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
    public function store(Request $request)
    {
        //
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
