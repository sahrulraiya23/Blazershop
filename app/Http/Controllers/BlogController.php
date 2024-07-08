<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function uploadblog(Request $request)
    {
        $data=new Blog;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);
        
        
        $data->image=$imagename;


        $data->title=$request->title;

        $data->description=$request->des;
        $data->save();


        return redirect()->back()->with('message','Product ADD Blog Successfully');
    }
}
