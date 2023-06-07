<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\MainCatgorie;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';

    protected $fillable = [
        'id','translation_lang','parent_id','translation_of', 'name', 'slug', 'photo', 'active', 'created_at', 'updated_at',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {

        return $query->select('id','parent_id','translation_lang', 'name', 'slug', 'photo', 'active', 'translation_of');
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('/' . $val) : "";

    }

    public function getActive()
    {
        return $this->active == 1 ? 'active' : 'inactive';

    }

    public function scopeDefaultSubCategory($query){
        return  $query -> where('translation_of',0);
    }

    //get main category of subcategory
    public  function mainCategory(){
        return $this->belongsTo(MainCatgorie::class,'category_id','id');
    }

    public function subCategory()
    {
        return $this->hasMany(self::class, 'translation_of'); //self::class ==> \App\Models\Admin\SubCategory
    }
}
