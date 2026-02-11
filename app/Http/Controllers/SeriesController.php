<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = DB::select("SELECT Nome FROM series");

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        DB::insert("INSERT INTO series (Nome) VALUES (?)", [$name]);

        return redirect('/series');
    }
}