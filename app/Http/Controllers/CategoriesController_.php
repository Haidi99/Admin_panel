<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$arr['Categories'] = Categories::all();
    	return view('admin.categories.index')->with($arr);
    }

    public function detail($id)
    {
    	$cat = Categories::find($id);
    	echo $cat -> title;
    }
}
