<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{

    public function index(){
        return Category::All();
    }

    public static function categoriesForThread($id)
    {
        $categories = DB::table('thread_categories')
        ->select('categories.name', 'categories.id')
        ->join('categories', 'thread_categories.categorie_id', '=', 'categories.id')
        ->join('threads', 'thread_categories.thread_id', '=', 'threads.id')
        ->where('thread_categories.thread_id', '=', $id)
        ->get();

        return $categories;
    }

    public function categoriesWithCount($limit){
        $categories = DB::table("categories")
        ->select("categories.name", "categories.id", "categories.description", DB::raw('count(thread_categories.thread_id) as count'))
        ->join("thread_categories", "thread_categories.categorie_id", "=", "categories.id")
        ->groupBy("thread_categories.categorie_id")
        ->paginate($limit);

        return $categories;
    }
}
