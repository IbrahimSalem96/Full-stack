<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use \Staudenmeir\EloquentEagerLimitXLaravelAdjacencyList\Eloquent\HasEagerLimitAndRecursiveRelationships;

class Post extends Model  implements TranslatableContract
{
    use HasFactory ,Translatable, SoftDeletes, HasEagerLimit ;


    public $translatedAttributes = ['title', 'content' , 'smallDesc' , 'tags'];
    protected $fillable = ['id', 'image', 'category_id', 'created_at', 'updated_at', 'deleted_at' ,'user_id' ];


    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}

