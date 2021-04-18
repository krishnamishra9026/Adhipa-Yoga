<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Image;
use File;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $images = ContactUs::all();
        return view('admin.contactus.index',compact('images'))->with('no',1);
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
            $profileimage->save(public_path('uploads/contactus/'.$path),100);
            $input['image'] = $path;

        }

        ContactUs::create($input);
        return redirect()->route('admin.contactus.index')->with('success','Image Uploaded successfully.');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contactus.create');
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
        $contactus = ContactUs::where('id',$id)->first();
        // echo "<pre>";print_r($contactus);"</pre>";exit;
        return view('admin.contactus.edit', compact('contactus'));
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
        $contactus = ContactUs::find($id);
        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage = Image::make($file);
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/contactus/'.$path),100);
            $contactus->image = $path;

        }

        if ($request->has('image2')) {

            $file = $request->file('image2');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage2 = Image::make($file);
            $profileimage2 = Image::make($file);
            $profileimage2->save(public_path('uploads/contactus/'.$path),100);
            $contactus->image2 = $path;

        }

        if ($request->has('image3')) {

            $file = $request->file('image3');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage3 = Image::make($file);
            $profileimage3 = Image::make($file);
            $profileimage3->save(public_path('uploads/contactus/'.$path),100);
            $contactus->image3 = $path;

        }

        if ($request->has('image4')) {

            $file = $request->file('image4');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage4 = Image::make($file);
            $profileimage4 = Image::make($file);
            $profileimage4->save(public_path('uploads/contactus/'.$path),100);
            $contactus->image4 = $path;

        }

        $contactus->title = $request->title;
        $contactus->name = $request->name;

        $contactus->desc = $request->desc;
        $contactus->address = $request->address;
        $contactus->phone_no = $request->phone_no;
        $contactus->say_hello = $request->say_hello;
        $contactus->open_timting = $request->open_timting;
        $contactus->facebook = $request->facebook;
        $contactus->twitter = $request->twitter;
        $contactus->insta = $request->insta;
        
        $contactus->save();

        return redirect()->route('admin.contactus.edit',$id)->with(['success'=>'ContactUs Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteimage($id)
    {
        $contactus = ContactUs::find($id);
        $image = public_path('uploads/contactus/'.$contactus->image);
        File::delete($image);
        $contactus->update(['image' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function deleteimage2($id)
    {
        $contactus = ContactUs::find($id);
        $image2 = public_path('uploads/contactus/'.$contactus->image2);
        File::delete($image2);
        $contactus->update(['image2' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function deleteimage3($id)
    {
        $contactus = ContactUs::find($id);
        $image3 = public_path('uploads/contactus/'.$contactus->image3);
        File::delete($image3);
        $contactus->update(['image3' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function deleteimage4($id)
    {
        $contactus = ContactUs::find($id);
        $image4 = public_path('uploads/contactus/'.$contactus->image4);
        File::delete($image4);
        $contactus->update(['image4' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function destroy($id)
    {
        ContactUs::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');    
    }
}
