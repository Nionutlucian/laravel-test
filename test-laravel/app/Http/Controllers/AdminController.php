<?php

namespace App\Http\Controllers;

use App\Models\PageContent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $pageContents = PageContent::all();
        return view('admin', ['pageContents' => $pageContents]);
    }

    public function edit()
    {
        return view('page-edit');
    }

    public function update(Request $request, PageContent $pageContent)
    {
        $request->validate([
            'page_content' => 'required',
        ]);

        $pageContent->update([
            'page_content' => $request->input('page_content'),
        ]);

        return redirect()->route('admin');
    }
}
