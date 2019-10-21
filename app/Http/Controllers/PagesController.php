<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function weddings()
    {
        return view('weddings');
    }

    public function songs_services()
    {

        $songs = collect([
            [
                'title' => 'the little things',
                'artist' => 'Peter Tiernan'
            ],
            [
                'title' => 'this could be the start',
                'artist' => 'Suzanne Tiernan'
            ],
            [
                'title' => 'The day we caught the train',
                'artist' => 'Ocean Colour Scene'
            ]
        ]);



        // dd($songs);

        return view('songs-services')->with('songs', $songs);
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }
}