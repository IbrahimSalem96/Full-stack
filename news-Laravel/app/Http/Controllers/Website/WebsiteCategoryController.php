<?php

namespace App\Http\Controllers\Website;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteCategoryController extends Controller
{

    public function show(Category $category)
    {
        $category = $category->load('children');
        $posts = Post::where('category_id' , $category->id)->paginate(15);

        return view('website.category' , compact('category','posts'));
    }
}
