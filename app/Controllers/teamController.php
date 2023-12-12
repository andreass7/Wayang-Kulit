<?php

namespace App\Controllers;

class teamController extends BaseController
{
    public function index(): string
    {
        return view('team');
    }
}
