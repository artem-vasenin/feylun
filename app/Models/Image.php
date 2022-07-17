<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'url',
    'id_active',
  ];

  public function page()
  { // связь многие к одному
    return $this->belongsTo(Page::class);
  }
}
