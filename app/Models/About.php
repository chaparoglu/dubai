<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model implements ITranslatable
{
    use HasFactory;

    protected  $fillable=
    [
      'name',
      'desc',
      'year',
      'car_number',
      'client',
      'niye_biz'
      
    ];

    protected $casts = [
        'desc'=>'array',
        'name'=>'array',
        'niye_biz'=>'array',
    ];

    public function translate(string $attr)
{
    return json_decode($this->{$attr})->{app()->getLocale()};
}
}
