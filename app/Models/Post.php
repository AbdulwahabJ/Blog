<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Post extends Model implements TranslatableContract
{
    use HasFactory;
    public $translatedAttributes = ['title', 'content','smallDesc'];
    protected $fillable = ['id', 'image', 'category_id','deleted_at', 'created_at', 'updated_at'];
}
