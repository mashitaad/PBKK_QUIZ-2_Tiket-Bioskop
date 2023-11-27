<?php

namespace App\Controllers;

class Seat extends BaseController
{
    public function index(): string
    {
        return view('seats');
    }
}
