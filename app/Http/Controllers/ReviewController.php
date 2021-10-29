<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request, $id)
    {
        $data = $request->all();
        $data['movie_id'] = $id;

        $review = Review::create($data);

        session()->flash('success_message', 'Your review has been added');

        return redirect()->action('App\Http\Controllers\MovieController@show', ['id' => $id]);
    }
}
