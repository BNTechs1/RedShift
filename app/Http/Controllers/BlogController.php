<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    //show create form 
    public function create()
    {
        return view('news.create');
    } 

     public function edit($id)
    {   
        $blog = Blog::find($id);
        return view('news.edit', ['blog'=>$blog]);
    }

    
    public function manage()
    {
        return view('news.manage');
    } 
    public function detail($id)
    {   
        $blog = Blog::find($id);
        return view('news.detailblog',['blog'=>$blog]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return (['blogs' => Blog::all()]);
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return Blog::find($blog);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('image')){
           
            $formFields['image'] = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
        }else{
            return 'no image';
        }
        Blog::create($formFields);

        return redirect('/manageBlog')->with('message', 'Blog created Successfully'); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required', 
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        }

        $Blog->update($formFields);

        return redirect('/manageBlog')->with('message', 'Blog Updated Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/manageBlog')->with('message','Blog Deleted succssfully');
    }
}


 // $width = 600; // your max width
            // $height = 600; // your max height
            // $img = IMG::make($uploaded_file);
            // $img->height() > $img->width() ? $width=null : $height=null;
            // $img->resize($width, $height, function ($constraint) {
            //     $constraint->aspectRatio();
            // });