<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model implements ITranslatable
{
    use HasFactory;

    protected  $fillable=
    [
      'model',
      'img',
      'images',
      'brend',
      'muherrik',
      'status',
      'order',
      'slug',
      'price',
      'yanacaq',
      'trans',
      'class',
      'year'
    ];

    protected $casts =
    [
        'images'=>'array',
        
    ];

    public function translate(string $attr)
    {
        return json_decode($this->{$attr})->{app()->getLocale()};
    }
}
