<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index(  $id ) {
        $page = Page::find($id);
        $blocks = [
            'id' => '',
            'name' => '',
            'code' => '',
        ];
        return view('admin.page', compact('page', 'blocks'));
    }

    public function save(Request $request, $id) {
        $page = Page::find($id);
        $page->name = $request->input('name');
        $page->code = $request->input('code');
        $page->content = $request->input('block-list');
        $page->save();

        return redirect()->back()->with('status', 'ok');
    }
}
