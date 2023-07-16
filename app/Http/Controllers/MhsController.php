<?php

namespace App\Http\Controllers;

use App\Models\Mahasantri;

class MhsController extends Controller
{
    public function showMhs()
    {
        return view('mhses', [
            "title" => "Blog",
            "mahasantris" => Mahasantri::all()]);
    }

}