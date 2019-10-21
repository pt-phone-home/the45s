<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;
use App\Mail\WebsiteMessage;



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

    public function sendMail(Request $request)
    {
        // dd('hello');
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $email = new Mail;

        $email->name = $request['name'];
        $email->email = $request['email'];
        $email->phone = $request['phone'];
        $email->message = $request['message'];

        \Mail::to('ptiernan@gmail.com')->send(
            new WebsiteMessage($email)
        );
        // \Mail::to('ptiernan@gmail.com')->send(
        //     new WebsiteMessage($email)
        // );

        return redirect()->route('contact')->with('mail', 'Thanks for getting in touch. We will get back to you soon');
    }
}