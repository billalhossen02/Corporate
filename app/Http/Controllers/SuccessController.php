<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Success;

class SuccessController extends Controller
{
    //
    public function view_success(){
        return view ('backend.success.view',[
            'successes' => Success::all()
        ]);
    }

    //Show Edit Form
    public function edit_success(Success $success){
        return view('backend.success.edit', ['success' => $success]);
    }

    //Update Blog Data
    public function update_success(Request $request, Success $success)
    {
        
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        
        $success->update($formFields);
        
        // return redirect()->route('single',['success' => $success->id]);
        return back();
        // return back()->with('message', 'Listing updated succesfully!');
        // ->with('message', 'Listing updated succesfully!');
    }

    //Show Single success
    public function show_success(success $success)
    {
        return view('frontend/successes/show', [
            'success' => $success
        ]);
    }
}
