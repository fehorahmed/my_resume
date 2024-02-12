<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills= Skill::all();
        return view('backend.skill.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "title" => 'required|string|max:255|unique:skills,title',
            "percentage" => 'required|numeric|max:100',
            "status" => 'required|boolean',
        ]);


        $skill = new Skill();
        $skill->title= $request->title;
        $skill->percentage= $request->percentage;
        $skill->status= $request->status;
        $skill->save();

        return redirect()->route('skill.index')->with('success','Skill Added Successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
