<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //show create form 
    public function create()
    {
        return view('services.create');
    } 

     public function edit($id)
    {   
        $service = Service::find($id);
        return view('services.edit', ['service'=>$service]);
    }

    
    public function manage()
    {
        return view('services.manage');
    } 
    public function detail($id)
    {   
        $service = Service::find($id);
        return view('pages.detailservice',['service'=>$service]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (['services' => Service::all()]);
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return Service::find($service);
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
           
            $formFields['image'] = $request->file('image')->store('images','public');
        }else{
            return 'no image';
        }
        Service::create($formFields);

        return redirect('/manageService')->with('message', 'Service created Successfully'); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required', 
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        }

        $service->update($formFields);

        return redirect('/manageService')->with('message', 'Service Updated Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('/manageService')->with('message','Service Deleted succssfully');
    }
}


 // $width = 600; // your max width
            // $height = 600; // your max height
            // $img = IMG::make($uploaded_file);
            // $img->height() > $img->width() ? $width=null : $height=null;
            // $img->resize($width, $height, function ($constraint) {
            //     $constraint->aspectRatio();
            // });