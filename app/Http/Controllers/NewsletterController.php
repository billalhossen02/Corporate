<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function newsletter()
    {
        return view('frontend.newsletter.newsletter');
    }
    public function addNewsletter(Request $request)
    {
        Newsletter::insert([
            'email' => $request->email,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('home')->withSuccess('You Are Succefully Signup For Our Newsletter');
    }
}
