<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;
  use Sluggable;

  protected $fillable = ['title'];

  public function pages()
  { // связь один к многим
    return $this->hasMany(Page::class);
  }

  public function sluggable(): array
  {
    return [
      'slug' => ['source' => 'title'],
    ];
  }
}
