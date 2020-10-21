<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Address;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        $address = Address::where('item_id', $id)->get();
        // echo var_dump($image);
        return view('user.show', ['user' => $user]);
    }
}
