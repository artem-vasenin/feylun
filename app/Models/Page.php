<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  use HasFactory;
  use Sluggable;

  protected $fillable = [
    'title',
    'description',
    'content',
    'category_id',
    'img',
  ];

  public function images()
  { // связь один к многим
    return $this->hasMany(Image::class);
  }

  public function category()
  { // связь многие к одному
    return $this->belongsTo(Category::class);
  }

  public function user()
  { // связь многие к одному
    return $this->belongsTo(User::class);
  }

  public function sluggable(): array
  {
    return [
      'slug' => ['source' => 'title'],
    ];
  }
}
