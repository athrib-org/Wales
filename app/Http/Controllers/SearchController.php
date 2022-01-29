<?php

namespace App\Http\Controllers;

use App\Models\BasicInformation;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $basics = BasicInformation::where('owner', 'like', "%$search%")->get();
        return view('search-result');
    }
}
