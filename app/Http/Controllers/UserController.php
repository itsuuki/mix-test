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
        $address = Address::where('user_id', $id)->first();
        // echo var_dump($address);
        return view('user.show', ['user' => $user, 'address' => $address]);
    }
}
