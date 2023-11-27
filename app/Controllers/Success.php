<?php

namespace App\Controllers;

class Success extends BaseController
{
    public function index(): string
    {
        return view('success');
    }
}
