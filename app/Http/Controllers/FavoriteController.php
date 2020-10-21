<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Favorite;

use App\Models\Item;

class FavoriteController extends Controller
{
    public function store(Item $item)
    {
        // echo var_dump($shop);
        // $shops = Shop::where('id', $shop->id)->get();
        $item->(Item::class)->users()->attach(Auth::id());
        return back();
    }



public function destroy(Item $item)
    {
        $item->Item::users()->detach(Auth::id());
        return back();
    }
}
