<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tag::All();
    }

    public function show($name)
    {
        return Tag::where('name', $name)->first();
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
    public function store($tagsList)
    {

        for($i=0; $i < count($tagsList); $i++){
        
            $condition = DB::table('tags')->where('name', $tagsList[$i])->first();

            global $store_result;
            if(empty($condition->name)){
                $tags = new Tag;
                $tags->name = $tagsList[$i];
                $tags->save();
                $store_result[] = $tags;
            }
            
        }
        echo var_dump($store_result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function TagsForThread($id)
    {
        $tags = DB::table('thread_tags')
        ->select('tags.name', 'tags.id')
        ->join('tags', 'thread_tags.tag_id', '=', 'tags.id')
        ->join('threads', 'thread_tags.thread_id', '=', 'threads.id')
        ->where('thread_tags.thread_id', '=', $id)
        ->get();

        return $tags;
    }

    public function popularTags($limit)
    {
        $tags = DB::table('thread_tags')
        ->select('tags.name', 'tags.id', DB::raw('count(thread_tags.tag_id) as count'))
        ->join('tags', 'thread_tags.tag_id', '=', 'tags.id')
        ->groupBy('thread_tags.tag_id')
        ->orderByDesc('count')
        ->limit($limit)
        ->get();
        
        return $tags;
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
