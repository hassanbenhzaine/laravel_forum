<?php

namespace App\Http\Controllers;
use App\Models\ThreadCategorie;

class ThreadCategoryController extends Controller
{
    public function store($request, $thread){
        $thread_category = new ThreadCategorie;
        $thread_category->thread_id = $thread->id;
        $thread_category->categorie_id = $request->category;
        $thread_category->save();
    }
}
