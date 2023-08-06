<?php

namespace App\Models\Admin;

use App\Models\Admin\Vendor;
use App\Models\Admin\MainCatgorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,Notifiable;

    protected $table = 'products';

    protected $fillable = [
        'id',
        'user_id_product',
        'translation_lang',
        'translation_of',
        'photo',
        'name',
        'slug',
        'active',
        'price',
        'created_at',
        'updated_at',
    ];

    public function scopeActive($query){

        return $query->where('active', 1);
    }

    public function getActive(){

        return $this->active == 1 ? 'active' : 'inactive';
    }

    public function scopeSelection($query){

        return $query->select(  'id',
                                'user_id_product',
                                'translation_lang',
                                'translation_of',
                                'photo',
                                'name',
                                'slug',
                                'active',
                                'price',
                                'created_at',
                                'updated_at'
                            );
    }

    public function getLogoAttribute($val)
    {
        return ($val !== null) ? asset('/' . $val) : "";
    }

    public function ProductVendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id'); //self::class ==> \App\Models\Admin\MainCatgorie
    }

    public function scopeDefaultSubCategory($query){
        return  $query -> where('translation_of',0);
    }

    public function Product()
    {
        return $this->hasMany(self::class, 'translation_of'); //self::class ==> \App\Models\Admin\SubCategory
    }

}
