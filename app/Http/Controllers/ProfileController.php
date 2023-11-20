<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){

        $name = "Nazmul Huda";
        $age = "30";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $cookie = cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        // Return the response with $data and status-code along with the set cookie
        return response()->json($data)->cookie($cookie);

    }
}
