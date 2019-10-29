<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Cafe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $params= ($request->all());

        $from =date('Y-m-d H:i:s',strtotime($params['start']));

        $to = date('Y-m-d H:i:s',strtotime('+'.$params['hours'].' hour',strtotime($params['start'])));

        $user_id= Auth::id();

        $cafeId=  $params['cafe_id'];

        $avalchairs= Cafe::where('id' , $cafeId)->get();
        if(($avalchairs[0]->available_seats)>= $params['chairs']){
            Cafe::where('id' , $cafeId)->update(['available_seats' => (($avalchairs[0]->available_seats)- $params['chairs'])]);

            Reservation::create(['user_id'=>$user_id, 'cafe_id'=> $cafeId, 'start_at'=> $from, 'end_at'=> $to ]);

        }

       return view('reserve');
//
//        $cafeId=  $params['cafe_id'];
//        dd($params['chairs']);
//        $avalchairs= Cafe::where('id' , $cafeId)->get();
//        if(($avalchairs[0]->available_seats)>= $params['chairs']){
//            Cafe::where('id' , $cafeId)->update(['available_seats' => (($avalchairs[0]->available_seats)- $params['chairs'])]);
//        }




        return "hi";
//        dd(Auth::id());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
