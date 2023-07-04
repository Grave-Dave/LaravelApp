<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
        $game = ["data"=>"cos"];
//fetch(127.0.0.1/api/getYs).then()res
        return response($game, 200);
    }

}
