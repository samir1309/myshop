<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class HomeController extends Controller
{
    public function getIndex()
    
    {
        $category = Categories :: orderBy('id' , 'DESC')-> whereNull('parent_id' )->get();

        return view('site.index', compact('category'));
    }
}
