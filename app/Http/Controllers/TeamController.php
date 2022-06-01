<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //show create form 
    public function create()
    {
        return view('teams.create');
    } 

     public function edit($id)
    {   
        $team = Team::find($id);
        return view('teams.edit', ['team'=>$team]);
    }

    
    public function manage()
    {
        return view('teams.manage');
    } 
    public function detail($id)
    {   
        $team = Team::find($id);
        return view('pages.detailteam',['team'=>$team]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return (['teams' => Team::all()]);
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return Team::find($team);
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
        Team::create($formFields);

        return redirect('/manageTeam')->with('message', 'Team created Successfully'); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required', 
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        }

        $team->update($formFields);

        return redirect('/manageTeam')->with('message', 'Team Updated Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect('/manageTeam')->with('message','Team Deleted succssfully');
    }
}


 // $width = 600; // your max width
            // $height = 600; // your max height
            // $img = IMG::make($uploaded_file);
            // $img->height() > $img->width() ? $width=null : $height=null;
            // $img->resize($width, $height, function ($constraint) {
            //     $constraint->aspectRatio();
            // });