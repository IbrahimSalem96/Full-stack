<?php

namespace App\Models\Admin;

use App\Models\Admin\Product;
use App\Models\Admin\MainCatgorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory,Notifiable ;

    protected $table = 'vendors';

    protected $fillable = [
        'name',
        'logo',
        'mobile',
        'address',
        'email',
        'category_id',
        'created_at',
        'updated_at',
        'password',
        'active',
    ];

    protected $hidden = [
        'category_id',
        'password',
    ];

    public function scopeActive($query){

        return $query->where('active', 1);
    }

    public function getActive(){

        return $this->active == 1 ? 'active' : 'inactive';
    }

    public function scopeSelection($query){

        return $query->select('id', 'category_id', 'active', 'name', 'address', 'email', 'logo', 'mobile');
    }

    public function getLogoAttribute($val)
    {
        return ($val !== null) ? asset('/' . $val) : "";
    }

    public function categories()
    {
        return $this->belongsTo(MainCatgorie::class, 'category_id', 'id'); //self::class ==> \App\Models\Admin\MainCatgorie
    }

    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    public function Product()
    {
        return $this->hasMany(Product::class, 'id', 'vendor_id'); //self::class ==> \App\Models\Admin\MainCatgorie
    }

}
