<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'email', 'subject', 'message', 'created_at' ,'updated_at', 'deleted_at'];

    public function scopeSelection($query){

        return $query->select('id', 'name', 'email', 'subject', 'message', 'created_at' ,'updated_at')->get();
    }
}
