<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;
use App\Http\Requests\SupportFV;
use Illuminate\Validation\ValidationException;

class SupportController extends Controller
{
    public function support()
    {
        return view('frontend.contact.support');
    }
    public function addSupport(SupportFV $request)
    {
        Support::create($request->validated());

        return redirect()->route('home')->withSuccess('Thank You For Your Support Request');
    }
}
