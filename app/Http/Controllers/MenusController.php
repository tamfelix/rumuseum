<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Collect;
use App\Models\Download;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Stock;
use Illuminate\Http\Request;

class MenusController extends Controller
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
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {


        $link = Menu::where('id', $menu->id)->get();
        $collections = Collect::where('category_id', $menu->id)->get();
        return view ('layouts.default.collects')->with([
            'link' => $link,
            'collections' => $collections,

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
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
