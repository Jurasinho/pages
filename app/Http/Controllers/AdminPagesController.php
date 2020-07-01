<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index(  $id ) {
        $page = Page::find($id);

        return view('admin.page', compact('page'));
    }

    public function save(Request $request, $id) {
        var_dump($request);

        return $back()->withInput();
    }
}
