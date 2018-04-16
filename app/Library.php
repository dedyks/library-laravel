<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    //
      public $timestamps = false;
    protected $fillable = [
      'ISBN',
      'title',
      'subtitle',
      'author',
      'publicationDate',
      'publisher',
      'pages',
      'description',
      'website'
    ];
    protected $primaryKey = 'ISBN';
    public $incrementing = false;

}
