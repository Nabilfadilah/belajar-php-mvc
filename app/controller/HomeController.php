<?php

namespace Nabil\MVC\controller;

use Nabil\MVC\app\View;

class HomeController
{

    function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari Programmer Zaman Now"
        ];

        View::render('Home/index', $model);
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Author : Mohammad Nabil Fadilah";
    }

    // function login(): void
    // {
    //     $request = [
    //         "username" => $_POST['username'],
    //         "password" => $_POST['password']
    //     ];

    //     $user = [];

    //     $response = [
    //         "message" => "Login Sukses"
    //     ];
    //     // kirimkan response ke view
    // }
}
