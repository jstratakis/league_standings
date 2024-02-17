<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('teams.index',compact('teams'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $data = $request->validate([
            'Name' => 'required',
            'Coach' => 'required',
            'Points' => 'required|numeric',
            'Games' => 'required|numeric',
            'Victories' => 'required|numeric',
            'Defeats' => 'required|numeric',
        ]);

        $team = new Team;
        $team->Name = $request->Name;
        $team->Coach = $request->Coach;
        $team->Points = $request->Points;
        $team->Games = $request->Games;
        $team->Victories = $request->Victories;
        $team->Defeats = $request->Defeats;
        $team->save();

        return redirect(route('team.index'));

        // Code to store the player in the database
    }
       
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('edit', ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Team $team, Request $request)
    {
        $data = $request->validate([
            'Name' => 'required',
            'Coach' => 'required',
            'Points' => 'required|numeric',
            'Games' => 'required|numeric',
            'Victories' => 'required|numeric',
            'Defeats' => 'required|numeric',
        ]);

        $team->update($data);

        return redirect(route('team.index'))->with('Success!', 'Team Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        
        return redirect(route('team.index'))->with('Success!', 'Team Updated Succesfully');
    }
}
