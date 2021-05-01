<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Package;
use App\Models\PackageTiming;
use Image;
use File;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index',compact('packages'))->with('no', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            $profileimage = Image::make($file)->resize(553, 285);
            $profileimage->save(public_path('uploads/packages/'.$path),100);

        }
        if ($request->has('image')) {
            $input['image'] = $request->$path;
        }

        $workout_days = @implode(',', $request->workout_days);

        $str_arr = @explode (",", $workout_days); 

        $arr1 = array(1,2,3,4,5,6,7); 

        $arr2 = $str_arr; 

        $missing = array_diff($arr1,$arr2);

        $strinarr = @implode(',', $missing);

        $input['workout_days'] = $workout_days;
        // $input['off_days'] = $strinarr;

        $new_package = Package::create($input);



        $startTimes =  $request->input('startTime', []);
        $endTimes =  $request->input('endTime', []);
        $links =  $request->input('link', []);

        foreach ($startTimes as $index => $startTimes) {
            $packageTime[] = [
                "package_id" => $new_package->id, // change this
                "startTime" => $startTimes[$index],
                "endTime" => $endTimes[$index],
                "link" => $links[$index]
            ];
        }

        PackageTiming::insert($packageTime);

        return redirect()->route('admin.packages.index')->with(['success'=>'Package Saved Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $package->workout_days = explode(',', $package->workout_days);

        $packageTimings = PackageTiming::where('package_id',$package->id)->get();

        #print_r($packageTiming); exit;

        //get(array("package_id"=>));

        return view('admin.packages.edit', compact('package', 'packageTimings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {

        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            $profileimage = Image::make($file)->resize(553, 285);
            $profileimage->save(public_path('uploads/packages/'.$path),100);

        }
        if ($request->has('image')) {
            $package->image = $path;
        }
        $package->name = $request->name;
        $package->no_of_classes = $request->no_of_classes;

        $package->sort = $request->sort;

        $package->price = $request->price;

        $package->validity = $request->validity;
        
        $workout_days = @implode(',', $request->workout_days);

        $str_arr = @explode(",", $workout_days); 

        $arr1 = array(1,2,3,4,5,6,7); 

        $arr2 = $str_arr; 

        $missing = array_diff($arr1,$arr2);

        $strinarr = @implode(',', $missing);

        // $package->off_days = $strinarr;

        $package->workout_days = $workout_days;


        $package->description = $request->description;

        if ($request->has('status')) {

            $package->status = $request->status;

        }else{

            $package->status = "off";
        }
        
        $package->save();

        PackageTiming::where('package_id',$package->id)->delete();
        $startTimes =  $request->input('startTime', []);
        $endTimes =  $request->input('endTime', []);
        $links =  $request->input('link', []);

        foreach ($startTimes as $index => $startTime) {
            $packageTime[] = [
                "package_id" => $package->id, // change this
                "startTime" => date("H:i:s",strtotime($startTimes[$index])),
                "endTime" => date("H:i:s",strtotime($endTimes[$index])),
                "link" => $links[$index]
            ];
        }

        // echo "<pre>";
        // print_r(date("H:i:s",strtotime($startTimes[0])));exit;


        PackageTiming::insert($packageTime);



        return redirect()->route('admin.packages.index')->with(['success'=>'Package Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('admin.packages.index')->with(['warning'=>'Package Deleted Successfully!']);
    }

    public function deleteimage(Package $package)
    {
        $image = public_path('uploads/packages/'.$package->image);
        File::delete($image);
        $package->update(['image' => null]);
        return response()->json(["success"=>'deleted']);
    }
}
