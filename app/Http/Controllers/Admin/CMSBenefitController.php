<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMSBenefit;
use Image;
use File;

class CMSBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $images = CMSBenefit::all();
        return view('admin.cmsbenefit.index',compact('images'))->with('no',1);
    }


    public function store(Request $request)
    {

        $input = $request->all();
        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage = Image::make($file);
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/cmsbenefit/'.$path),100);
            $input['image'] = $path;

        }

        CMSBenefit::create($input);
        return redirect()->route('admin.cmsbenefit.index')->with('success','Image Uploaded successfully.');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cmsbenefit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cms = CMSBenefit::where('id',$id)->first();
        // echo "<pre>";print_r($cms);"</pre>";exit;
        return view('admin.cmsbenefit.edit', compact('cms'));
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
        $cms = CMSBenefit::find($id);
        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage = Image::make($file);
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/cmsbenefit/'.$path),100);
            $cms->image = $path;

        }

        if ($request->has('image2')) {

            $file = $request->file('image2');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage2 = Image::make($file);
            $profileimage2 = Image::make($file);
            $profileimage2->save(public_path('uploads/cmsbenefit/'.$path),100);
            $cms->image2 = $path;

        }

        if ($request->has('image3')) {

            $file = $request->file('image3');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage3 = Image::make($file);
            $profileimage3 = Image::make($file);
            $profileimage3->save(public_path('uploads/cmsbenefit/'.$path),100);
            $cms->image3 = $path;

        }


        $cms->name = json_encode($request->name);

        if ($request->has('status')) {

            $cms->status = $request->status;

        }else{

            $cms->status = "off";
        }
        
        $cms->save();

        return redirect()->route('admin.cmsbenefit.edit',1)->with(['success'=>'Cms Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteimage($id)
    {
        $cms = CMSBenefit::find($id);
        $image = public_path('uploads/cmsbenefit/'.$cms->image);
        File::delete($image);
        $cms->update(['image' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function deleteimage2($id)
    {
        $cms = CMSBenefit::find($id);
        $image2 = public_path('uploads/cmsbenefit/'.$cms->image2);
        File::delete($image2);
        $cms->update(['image2' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function deleteimage3($id)
    {
        $cms = CMSBenefit::find($id);
        $image3 = public_path('uploads/cmsbenefit/'.$cms->image3);
        File::delete($image3);
        $cms->update(['image3' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function deleteimage4($id)
    {
        $cms = CMSBenefit::find($id);
        $image4 = public_path('uploads/cmsbenefit/'.$cms->image4);
        File::delete($image4);
        $cms->update(['image4' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function destroy($id)
    {
        CMSBenefit::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');    
    }
}