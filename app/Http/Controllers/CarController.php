<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('car/index' , compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {
        // dd($request->all()),
        $cars = Car::create([
            'owner'=>$request->input('owner'),
            'model'=>$request->input('model'),
            'description'=>$request->input('description'),
            'userimg'=>$request->file('userimg')->store('/public/store'),
            'img'=>$request->file('img')->store('public/img'),
            'user_id'=>Auth::id(),
        ]);
            
        return redirect('car/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('car.show' , compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $car->model = $request->model;
        $car->owner = $request->owner;
        $car->description= $request->description;

        if($request->img){
            $car->img= $request->file('img')->store('public/img');
        }
        $car->save();
        if($request->userimg){
            $car->userimg=$request->file('userimg')->store('public/img');
        }
        $car->save();

        return redirect(route('car.show', compact('car')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect(route('car.index',compact('car')));
    }

    public function auth($auth){

        $cars = Car::where('user_id' , $auth)->get();
        $user = User::find($auth);
        return view('car.auth', compact('cars' , 'user'));
    }

}
