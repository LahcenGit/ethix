<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function create(){
        return view('admin.add-blog');
    }

    public function store(Request $request){
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->tags = $request->tags;
        $blog->description = $request->description;
        if( $request->is_brouillon == 1){
            $blog->is_brouillon = 1;
        }
        else{
            $blog->is_brouillon = 0;
        }
       
        $blog->save();
        return redirect('dashboard-admin/blogs');
    }
}
