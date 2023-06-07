<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Category extends Model implements TranslatableContract
{

    use HasFactory, Translatable, HasEagerLimit;


    protected $table ='categories';
    public $translatedAttributes = ['title', 'content'];
    protected $fillable = [ 'id', 'image', 'parent', 'created_at', 'updated_at', 'deleted_at', 'user_id'];

    public function parents()
    {
        return $this->belongsTo(Category::class,'parent');
    }

    public function children()
    {
        return $this->hasMany(Category::class,'parent');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
