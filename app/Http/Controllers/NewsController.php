<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = [];
        
        // if(Cache::has('first_ten_news')){
        //    $news = Cache::get('first_ten_news');
        // } else {
        //     $news = News::orderByDesc('created_at')->limit(10)->get();
        //     Cache::put('first_ten_news', $news, 30);
        // }

        $news = Cache::remember('first_ten_news', 30, function(){
            return News::orderByDesc('created_at')->limit(10)->get();
        });

        return view('news', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
