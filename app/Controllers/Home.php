<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('module/database_cst/database_cst');
    }
}
