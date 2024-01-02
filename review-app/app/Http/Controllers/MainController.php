<?php

namespace App\Http\Controllers;

use App\Models\FeedbackUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $rew = new FeedbackUser();
        return view('about',['rewievs' => $rew->all()]);
    }

    public function review()
    {
        return view('review');
    }

    public function review_ceck(Request $req)
    {
        $valid = $req->validate([
            'email'=>'required|min:3|max:50',
            'subject'=>'required|min:3|max:50',
            'mesaj'=>'required|min:5|max:50'
        ]);

        $review = new FeedbackUser();

        $review->email = $req->input('email');
        $review->subject = $req->input('subject');
        $review->mesaj = $req->input('mesaj');

        $review->save();

        return redirect() -> route('about');
    }



}

