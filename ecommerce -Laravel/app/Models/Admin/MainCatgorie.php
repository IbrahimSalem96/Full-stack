<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Vendor;
use App\Models\Admin\SubCategory;
use App\Observers\MainCatgoreieObserver;

class MainCatgorie extends Model
{
    use HasFactory;

    protected $table = 'main_catgories';

    protected $fillable = [
        'translation_lang',
        'translation_of',
        'name',
        'slug',
        'photo',
        'active',
        'created_at',
        'updated_at	',
    ];

    protected static function boot()
    {
        parent::boot();
        MainCatgorie::observe(MainCatgoreieObserver::class);
    }

    public function scopeSelection($query){

        return $query->select('id', 'translation_lang', 'name', 'slug', 'photo', 'active', 'translation_of');
    }

    public function scopeActive($query){
        return $query->where('active', 1);
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('/' . $val) : "";
    }

    public function getActive(){

        return $this->active == 1 ? 'active' : 'inactive';
    }

    public function scopeDefaultCategory($query){
        return  $query -> where('translation_of',0);
    }

    // get all translation categories
    public function categories()
    {
        return $this->hasMany(self::class, 'translation_of'); //self::class ==> \App\Models\Admin\MainCatgorie
    }

    public function Vendors()
    {
        return $this->hasMany(Vendor::class, 'category_id', 'id'); //self::class ==> \App\Models\Admin\MainCatgorie
    }

    public  function subCategories()
    {
        return $this->hasMany(SubCategory::class,'category_id','id');
    }


}
