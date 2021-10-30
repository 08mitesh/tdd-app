<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;

class ConcertsController extends Controller
{
    //

    public function show($id)
    {
        Concert::whereNotNull('published_at')->findOrFail($id);
    return view('concerts.show',['concert' =>$concert]);
    }
}
