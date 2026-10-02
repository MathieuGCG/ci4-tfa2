<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('home', ['pageTitle' => 'Home Page', 'content' => 'Welcome to our CodeIgniter 4 Website!']);
    }

    public function about(): string
    {
        return view('about', ['pageTitle' => 'About Us', 'content' => 'We are building clean MVC web applications.']);
    }
}