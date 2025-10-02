<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('layout/main', [
            'title'   => 'Dashboard',
            'content' => view('partials/dashboard')
        ]);
    }

    public function components()
    {
        return view('layout/main', [
            'title'   => 'Components',
            'content' => view('components')
        ]);
    }
}
