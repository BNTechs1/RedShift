<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //show create form 
    public function create()
    {
        return view('portfolios.create');
    } 

     public function edit($id)
    {   
        $portfolio = Portfolio::find($id);
        return view('portfolios.edit', ['portfolio'=>$portfolio]);
    }

    
    public function manage()
    {
        return view('portfolios.manage');
    } 
    public function detail($id)
    {   
        $portfolio = Portfolio::find($id);
        return view('pages.detailportfolio',['portfolio'=>$portfolio]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (['portfolios' => Portfolio::all()]);
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return Portfolio::find($portfolio);
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
        Portfolio::create($formFields);

        return redirect('/managePortfolio')->with('message', 'Portfolio created Successfully'); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required', 
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        }

        $portfolio->update($formFields);

        return redirect('/managePortfolio')->with('message', 'Portfolio Updated Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect('/managePortfolio')->with('message','Portfolio Deleted succssfully');
    }
}


 // $width = 600; // your max width
            // $height = 600; // your max height
            // $img = IMG::make($uploaded_file);
            // $img->height() > $img->width() ? $width=null : $height=null;
            // $img->resize($width, $height, function ($constraint) {
            //     $constraint->aspectRatio();
            // });