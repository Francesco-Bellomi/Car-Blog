<?php

namespace App\Http\Controllers;

use App\Models\Gathering;
use Illuminate\Http\Request;
use App\Http\Requests\GatheringRequest;

class GatheringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gatherings=Gathering::all();
        return view('gathering/index', compact('gatherings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gathering.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GatheringRequest $request)
    {
        $gatherings= Gathering::create([
            'title'=>$request->input('title'),
            'location'=>$request->input('location'),
            'date'=>$request->input('date'),
            'description'=>$request->input('description'),
            'img'=>$request->file('img')->store('/public/img'),
        ]);

        return redirect(route('gathering.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gathering  $gathering
     * @return \Illuminate\Http\Response
     */
    public function show(Gathering $gathering)
    {
        return view('gathering.show', compact('gathering'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gathering  $gathering
     * @return \Illuminate\Http\Response
     */
    public function edit(Gathering $gathering)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gathering  $gathering
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gathering $gathering)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gathering  $gathering
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gathering $gathering)
    {
        //
    }
}
