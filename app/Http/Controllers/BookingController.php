<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Package;
use App\Models\PackageTiming;
use Session;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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



        // print_r($request->all()); exit;
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            //'message' => 'required'
        ]);

        $input = (object) $request->all();

        #print_r($input); exit;


        $packageData = Package::where('id',$input->package_id)->first();
        $packageTimingData = PackageTiming::where('id',$input->package_timing_id)->first();

        $data = array();

        $data['package_id'] = $input->package_id;
        $data['package_timing_id'] = $input->package_timing_id;
        $data['name'] = $input->name;
        $data['email'] = $input->email;
        $data['mobile_no'] = $input->mobileno;
        $data['start_date'] = date("Y-m-d", strtotime($input->start_date));
        $data['start_time'] = $packageTimingData->startTime;
        $data['end_time'] = $packageTimingData->endTime;
        $data['price'] = $packageData->price;
        $data['package_details'] = json_encode($packageData);

        $lastBookingIds = Booking::create($data);

        // print_r($lastBookingIds); exit; 

        Session::put('packageUserData', $lastBookingIds);


        return redirect()->route('payment');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $packageData = Package::where('id',$id)->first();
        $packageDataTimings = PackageTiming::where('package_id',$id)->get();
        // print_r($packageData);
        return view('booking', compact('packageData','packageDataTimings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
