<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResearchController extends Controller
{

    public function indexForReviewer()
    {
        $research=Research::where('reviewer->id',Auth::id())->get();
        return redirect()->route('reviewer.research',compact('research'));
    }

    public function indexForEditor()
    {
        $research=Research::where('editor_id',Auth::id())->get();
        return redirect()->route('editor.research',compact('research'));
    }

    public function indexForJournal()
    {
        $research=Research::where('journal_id',Auth::id())->get();
        return redirect()->route('journal.research',compact('research'));
    }











    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\research  $research
     * @return \Illuminate\Http\Response
     */
    public function show(research $research)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\research  $research
     * @return \Illuminate\Http\Response
     */
    public function edit(research $research)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\research  $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, research $research)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\research  $research
     * @return \Illuminate\Http\Response
     */
    public function destroy(research $research)
    {
        //
    }
}
