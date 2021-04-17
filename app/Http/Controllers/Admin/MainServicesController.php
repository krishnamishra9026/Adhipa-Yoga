<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;
use App\Models\Blog;
use App\Models\MainServices;
use Image;
use File;

class MainServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $images = Blog::all();
        return view('admin.mainservices.index',compact('images'))->with('no',1);
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
            $profileimage->save(public_path('uploads/cms/'.$path),100);
            $input['image'] = $path;

        }

        Cms::create($input);
        return redirect()->route('admin.cms.index')->with('success','Image Uploaded successfully.');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cms.create');
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
        #echo $id; exit;
        $cms = MainServices::where('id',$id)->first();
        // echo "<pre>";print_r($cms);"</pre>";exit;
        return view('admin.mainservices.edit', compact('cms'));
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
        $cms = MainServices::find($id);
        if ($request->has('img')) {

            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage = Image::make($file);
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/services/'.$path),100);
            $cms->img = $path;

        }

       

        $cms->heading = $request->heading;

        $cms->desc = $request->desc;
        
        $cms->save();

        return redirect()->route('admin.mainservices.edit',$id)->with(['success'=>'Cms Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteimage($id)
    {
        $cms = MainServices::find($id);
        $image = public_path('uploads/services/'.$cms->img);
        File::delete($image);
        $cms->update(['img' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function deleteimage2($id)
    {
        $cms = Cms::find($id);
        $image2 = public_path('uploads/cms/'.$cms->image2);
        File::delete($image2);
        $cms->update(['image2' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function deleteimage3($id)
    {
        $cms = Cms::find($id);
        $image3 = public_path('uploads/cms/'.$cms->image3);
        File::delete($image3);
        $cms->update(['image3' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function deleteimage4($id)
    {
        $cms = Cms::find($id);
        $image4 = public_path('uploads/cms/'.$cms->image4);
        File::delete($image4);
        $cms->update(['image4' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function destroy($id)
    {
        Cms::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');    
    }
}
