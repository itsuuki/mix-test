<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ItemController extends Controller
{
    public function index()
    {
        return view('item/index');
    }

    public function create()
    {
        return view('item.create');
    }

    public function store()
    {
        return view('item.create');
    }
}
