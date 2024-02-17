<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelpers;
use Illuminate\Support\Facades\View;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = GeneralHelpers::getCountries();
        return view('players.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $messages = [
            'Jersey_Number.unique' => 'The jersey number is already in use by another player.',
        ];

        $data = $request->validate([
            'Name' => 'required',
            'Team' => 'required',
            'Jersey_Number' => 'required|numeric|min:0|max:99|unique:players,Jersey_Number',
            'Position' => 'required',
            'Date_of_birth' => 'required|date',
            'Nationality' => 'required',
        ]);
    
        $player = new Player;
        $player->Name = $request->Name;
        $player->Team = $request->Team;
        $player->Jersey_Number = $request->Jersey_Number;
        $player->Position = $request->Position;
        $player->Date_of_birth = $request->Date_of_birth;
        $player->Nationality = $request->Nationality;
        $player->save();
    
        return redirect(route('player.index'));

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
    public function edit(Player $player)
    {
        return view('edit', ['player' => $player]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Player $player, Request $request)
    {   
        $data = $request->validate([
            'Name' => 'required',
            'Team' => 'required',
            'Jersey_Number' => 'required|numeric|min:0|max:99|unique:players,Jersey_Number,' . $player->id,
            'Position' => 'required',
            'Date_of_birth' => 'required|date',
            'Nationality' => 'required',
        ]);
    
        $player->update($data);
    
        return redirect(route('player.index'))->with('Success!', 'Player Updated Successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();
        
        return redirect(route('player.index'))->with('Success!', 'Player Updated Succesfully');

    }

    public function createPlayerForm() {
        
    }
}




