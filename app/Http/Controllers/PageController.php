<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    $pages = Page::query()->with('categories')->get();
    return view('admin.pages.index', compact('pages'));
  }

  public function form()
  {
    return view('admin.pages.form');
  }

  public function edit(Request $req)
  {
    $pages = null;
    if ($req->slug) {
      $pages = Page::query()->where(['slug' => $req->slug])->first();
    }
    return view('admin.pages.form', compact('pages'));
  }

  public function update(Request $req)
  {
    if ($req->id) {
      $req->validate([
        'title' => 'required'
      ]);
      $cat = Page::query()->find($req->id);
      $cat->update(['title' => $req->title]);
      return redirect()->route('admin.pages.edit', $cat->slug);
    }
    return redirect()->route('admin.pages');
  }

  public function create(Request $req)
  {
    $req->validate([
      'title' => 'required',
      'description' => 'required',
      'content' => 'required',
      'category_id' => 'nullable|integer',
      'img' => 'nullable|image',
    ]);
    Page::query()->create(['title' => $req->title]);
    return view('admin.pages.index');
  }
}
