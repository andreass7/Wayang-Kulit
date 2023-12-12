<?php

namespace App\Controllers;

class produkController extends BaseController
{
    public function index(): string
    {
        return view('produk/produk');
    }
}
