<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(  ) {
        $page = Page::all();
        $data = [
            'pages' => $page
        ];

        return view('admin.pages', $data);
    }
}
