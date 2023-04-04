<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class FMenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $categories = Category::all();

        return view('menus.index', compact('menus', 'categories'));
    }
}
