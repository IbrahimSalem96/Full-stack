<?php
use Illuminate\Support\Facades\Config;

function get_languages(){

    return \App\Models\Admin\Language::active()->selection();
}

function get_default_lang(){

    return   Config::get('app.locale');
}


function saveimages($folder, $image){

    $image->store('/', $folder);
    $filename = $image->hashName();
    $path = 'imgsite/' . $folder . '/' . $filename;
    return $path;
}
