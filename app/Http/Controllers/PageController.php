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
        $threads_result = $threads->threadsWithUsersInfo(10);

        $tags = new TagController;
        $tags_result = $tags->popularTags(10);

        // $threadViews = $threads->threadsWithUsersInfo(10);

        return view('home', ['threads' => $threads_result, 'tags' => $tags_result]);
    }

    public function newThread(){
        $categories = new CategoryController;
        $categories_result = $categories->index();

        return view('new_thread', ['categories' =>  $categories_result]);
    }

    public function categories(){
        $categories = new CategoryController;
        $categories_result = $categories->categoriesWithCount(10);

        return view('categories', ['categories' => $categories_result]);
    }

    public function category($name){
        $threads = new ThreadController;
        $threads_result = $threads->threadsWithCategoryName($name, 10);

        return view('category', ['threads' => $threads_result]);
    }

    public function thread(Request $request)
    {
        $threadId = $request->all()['id'];
        $thread = new ThreadController;
        $thread_result = $thread->threadWithUserInfo($threadId);

        $thread_privilege = $thread->checkThreadPrivilege($threadId);

        $privilege['thread'] = $thread_privilege;

        $answers = new AnswerController;
        $answers_result = $answers->answerWithUserInfo($threadId);
 
        return view('thread', ['thread' => $thread_result, 'answers' => $answers_result, 'privilege' => $privilege]);
    }

    public function editThread(Request $request){

        $threadId = $request->all()['id'];

        $categories = new CategoryController;
        $categories_result = $categories->index();

        $thread = new ThreadController;
        $thread_result = $thread->show($threadId);

        return view('edit_thread', ['categories' =>  $categories_result, 'thread' => $thread_result]);

    }

    public function user($id){
        $user = new UserController;
        $user_result = $user->show($id);

        return view('user', ['user' => $user_result]);
    }

    public function tag($name)
    {
        $tag = new TagController;
        $tag_result = $tag->show($name);

        $threads = new ThreadController;
        $threads_result = $threads->threadsWithTagByName($name);

        return view('tag', ['threads' => $threads_result, 'tag' => $tag_result]);
    }

    public function search(Request $request)
    {
        $query = $request->all()['q'];
        $threads = new ThreadController;
        $threads_result = $threads->search($query, 10);

        return view('search', ['threads' => $threads_result]);        
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
