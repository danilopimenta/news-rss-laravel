<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use willvincent\Feeds\Facades\FeedsFacade as Feeds;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feed = Feeds::make('https://news.google.com/news/section?cf=all&hl=pt-BR&pz=1&ned=pt-BR_br&topic=n&output=rss', true);

        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_description(),
            'items'     => $feed->get_items(),
        );

        return view('home', $data);
    }
}
