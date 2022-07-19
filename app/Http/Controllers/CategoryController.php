<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
  public function index()
  {
    $cats = Category::query()->with('pages')->get();
    return view('admin.cats.index', compact('cats'));
  }

  public function form()
  {
    return view('admin.cats.form', ['cat' => null]);
  }

  public function edit(Request $req)
  {
    $cat = null;
    if ($req->slug) {
      $cat = Category::query()->where(['slug' => $req->slug])->first();
    }
    return view('admin.cats.form', compact('cat'));
  }

  public function update(Request $req)
  {
    if ($req->id) {
      $req->validate(['title' => 'required']);
      $cat = Category::query()->find($req->id);
      $cat->update(['title' => $req->title]);
      return redirect()->route('admin.cats.edit', $cat->slug);
    }
    return redirect()->route('admin.cats');
  }

  public function create(Request $req)
  {
    $req->validate(['title' => 'required']);
    Category::query()->create(['title' => $req->title]);
    return redirect()->route('admin.cats');
  }

  public function delete($id) {
    $cat = Category::query()->find($id);

    if($cat) {
      $cat->delete();
    }
    return redirect()->route('admin.cats');
  }
}
