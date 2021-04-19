<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gathering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'user_id'=>Auth::id(),
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
        return view('gathering.edit', compact('gathering'));
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
        $gathering->title = $request->title;
        $gathering->date = $request->date;
        $gathering->location = $request->location;
        $gathering->description = $request->description;
        if($request->img){
            
            $gathering->img = $request->file('img')->store('public/img');
        }
        $gathering->save();

        return redirect(route('gathering.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gathering  $gathering
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gathering $gathering)
    {
        $gathering->delete();
        return redirect(route('gathering.index'));
    }

    public function auth($auth){

        $gatherings = Gathering::where('user_id', $auth)->get();
        $user = User::find($auth);
        return view('gathering.auth' , compact('gatherings' , 'user'));

    }


}
