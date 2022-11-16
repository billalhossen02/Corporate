<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\FeedbackFV;

class FeedbackController extends Controller
{
    public function feedback(FeedbackFV $request)
    {
        $topics = array();
        foreach ($request->feedback as $item) {
            $topics[] = $item;
        }
        Feedback::insert([
            'topic_names' => implode("|", $topics),
            'rating' => $request->star,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('home')->withSuccess('Thank You For Your Feedback');
    }
}
