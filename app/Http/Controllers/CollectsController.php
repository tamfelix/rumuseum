<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Collect;
use App\Models\Collectible;
use App\Models\Download;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Stock;
use Illuminate\Http\Request;

class CollectsController extends Controller
{

    public $news;
    public $events;
    public $leftmenu;
    public $menuitems;
    public $articles;

    public function __construct()
    {
        $this->news = Blog::orderBy('created_at', 'asc')->take(4)->get();
        $this->menuitems = Page::orderBy('orderby', 'asc')->get()->toArray();
        $this->leftmenu = Menu::orderBy('orderby', 'asc')->get()->toArray();
        $this->events = Download::orderBy('created_at', 'asc')->take(4)->get();
        $this->articles = Stock::orderBy('created_at', 'asc')->take(8)->get();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function show(Collect $collect)
    {

        $link = Menu::where('id', $collect->id)->get();
        $objects = Collectible::where('category_id', $collect->id)->get();
        return view ('layouts.default.collection')->with([
            'link' => $link,
            'objects' => $objects,

            'menuitems' => $this->menuitems,
            'leftmenu' => $this->leftmenu,
            'news'=> $this->news,
            'events' => $this->events,
            'articles' => $this->articles,



        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function edit(Collect $collect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collect $collect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collect $collect)
    {
        //
    }
}
