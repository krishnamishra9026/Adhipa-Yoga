<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;
use Image;
use File;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $images = Cms::all();
        return view('admin.cms.index',compact('images'))->with('no',1);
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
        $cms = Cms::where('id',$id)->first();
        // echo "<pre>";print_r($cms);"</pre>";exit;
        return view('admin.cms.edit', compact('cms'));
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
        $cms = Cms::find($id);
        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage = Image::make($file);
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/cms/'.$path),100);
            $cms->image = $path;

        }

        if ($request->has('image2')) {

            $file = $request->file('image2');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage2 = Image::make($file);
            $profileimage2 = Image::make($file);
            $profileimage2->save(public_path('uploads/cms/'.$path),100);
            $cms->image2 = $path;

        }

        if ($request->has('image3')) {

            $file = $request->file('image3');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage3 = Image::make($file);
            $profileimage3 = Image::make($file);
            $profileimage3->save(public_path('uploads/cms/'.$path),100);
            $cms->image3 = $path;

        }

        if ($request->has('image4')) {

            $file = $request->file('image4');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage4 = Image::make($file);
            $profileimage4 = Image::make($file);
            $profileimage4->save(public_path('uploads/cms/'.$path),100);
            $cms->image4 = $path;

        }

        $cms->title = $request->title;
        $cms->name = $request->name;

        $cms->description = $request->description;


        if ($request->has('status')) {

            $cms->status = $request->status;

        }else{

            $cms->status = "off";
        }
        
        $cms->save();

        return redirect()->route('admin.cms.edit',1)->with(['success'=>'Cms Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteimage($id)
    {
        $cms = Cms::find($id);
        $image = public_path('uploads/cms/'.$cms->image);
        File::delete($image);
        $cms->update(['image' => null]);

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
